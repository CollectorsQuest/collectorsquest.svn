<?php

class Migration020 extends sfMigration
{
  public function up() 
  {
    include sfConfig::get('sf_lib_dir').'/vendor/Disqus.class.php';

    $disqus = new Disqus(sfConfig::get('app_api_disqus_user_key'), sfConfig::get('app_api_disqus_forum_key'));

    $comments = CommentPeer::doSelect(new Criteria());
    foreach ($comments as $comment)
    {
      try
      {
        if ($comment->getCollectible())
        {
          $title = $comment->getCollectible()->getName();
          $thread_id = 'collectible-'. $comment->getCollectibleId();
        }
        else if ($comment->getCollection())
        {
          $title = $comment->getCollection()->getName();
          $thread_id = 'collection-'. $comment->getCollectionId();
        }
        else
        {
          continue;
        }

        if ($collector = $comment->getCollector())
        {
          $author_name = $collector->getDisplayName();
          $author_email = $collector->getEmail();
        }
        else
        {
          $author_name = $comment->getAuthorName();
          $author_email = $comment->getAuthorEmail();
        }

        if (empty($author_name)) $author_name = 'Anonymous';
        if (empty($author_email)) $author_email = 'no-reply@collectorsquest.com';

        $options = array(
          'created_at' => $comment->getCreatedAt('Y-m-d\TH:i')
        );

        $thread = $disqus->thread_by_identifier($thread_id, $title)->thread;
        if ($thread)
        {
          $disqus->create_post($thread->id, $comment->getBody(), $author_name, $author_email, $options);
          echo "Created comment with ID: ". $comment->getId() ."\n";
        }
      }
      catch(DisqusException $exception)
      {
        // Display the error.
        echo $exception->getMessage();
      }

      sleep(1);
    }

    // http://groups.google.com/group/disqus-dev/web/api-1-1#create_post
  }

  public function down() 
  {
    // no going back
  }
}
