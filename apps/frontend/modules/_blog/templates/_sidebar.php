<?php if ($data['is_page']): ?>
<ul id="widgets" class="span-5">
  <li id="widget-pages" class="widget">
    <h2 class="widget-title">Pages</h2>
    <ul>
      <li><?= link_to('About Us', '@page?slug=about'); ?></li>
      <li><?= link_to('Contact Information', '@page?slug=contact-us'); ?></li>
      <li><?= link_to('Terms & Conditions', '@page?slug=terms-and-conditions'); ?></li>
      <li><?= link_to('RSS Feeds', '@page?slug=rss-feeds'); ?></li>
    </ul>
  </li>
  <!-- Blog Sidebar //-->
</ul>
<?php else: ?>
<ul id="widgets" class="span-5">
  <li style="text-align: center; padding: 10px 0 12px 0;">
    <a href="feed://www.collectorsquest.com/blog/feed/">
      <img src="/images/blog/rss-thb-one.gif" alt="RSS One" />
    </a>
    &nbsp;
    <a href="feed://www.collectorsquest.com/blog/wp-rss2.php">
      <img src="/images/blog/rss-thb-two.gif" alt="RSS Two" />
    </a>
    &nbsp;
    <a href="feed://www.collectorsquest.com/blog/feed/atom/">
      <img src="/images/blog/rss-thb-atom.gif" alt="Atom Feed" />
    </a>
  </li>
  <li id="widget-blog-categories" class="widget">
    <h2 class="widget-title">Blog Categories</h2>
    <ul>
      <li class="market">
        <a href="/blog/category/reviews/">reviews</a>
      </li>
      <li class="deco">
        <a href="/blog/category/decorating/">decorating</a>
      </li>
      <li class="hot">
        <a href="/blog/category/interviews/">interviews</a>
      </li>
      <li class="finds">
        <a href="/blog/category/flea-market-finds/">flea market finds</a>
      </li>
      <li class="fyi">
        <a href="/blog/category/collecting-fyi/">collecting fyi</a>
      </li>
      <li class="event">
        <a href="/blog/category/events/">events</a>
      </li>
    </ul>
  </li>
  <li id="widget-bloggers" class="widget">
    <h2 class="widget-title">Our Bloggers</h2>
    <ul>
      <li class="collin-david">
        <a href="/blog/people/collin-david" title="Bio of blogger Collin David">
          <img src="/images/blog/avatar-collin-david.png" align="left" style="height: 40px; margin-right: 10px;">
        </a>
        <b style="font-size: 14px;">Collin David</b><br>
        <a href="/blog/people/collin-david" title="Bio of blogger Collin David">[bio]</a> &nbsp;
        <a href="/blog/index.php?author=7" title="Collin David's articles on collecting...">[articles]</a>
        <br clear="all">
      </li>
      <li class="brian-rubin">
        <a href="/blog/people/brian-rubin">
          <img src="/images/blog/avatar-brian-rubin.png" align="left" style="height: 40px; margin-right: 10px;">
        </a>
        <b style="font-size: 14px;">Brian Rubin</b><br>
        <a href="/blog/people/brian-rubin" title="Bio of blogger Brian Rubin">[bio]</a> &nbsp;
        <a href="/blog/index.php?author=7" title="Brian Rubin's articles on collecting...">[articles]</a>
        <br clear="all">
      </li>
      <li class="dean-ferber">
        <a href="/blog/people/dean-ferber">
          <img src="/images/blog/avatar-dean-ferber.png" align="left" style="height: 40px; margin-right: 10px;">
        </a>
        <b style="font-size: 14px;">Dean Ferber</b><br>
        <a href="/blog/people/dean-ferber">[bio]</a> &nbsp;
        <a href="/blog/index.php?author=9">[articles]</a>
        <br clear="all">
      </li>
      <li class="deanna-dahlsad">
        <a href="/blog/people/deanna-dahlsad">
          <img src="/images/blog/avatar-deanna-dahlsad.png" align="left" style="height: 40px; margin-right: 10px;">
        </a>
        <b style="font-size: 14px;">Deanna Dahlsad</b><br>
        <a href="/blog/people/deanna-dahlsad">[bio]</a> &nbsp;
        <a href="/blog/index.php?author=3">[articles]</a>
        <br clear="all">
      </li>
      <li class="derek-dahlsad">
        <a href="/blog/people/derek-dahlsad">
          <img src="/images/blog/avatar-derek-dahlsad.png" align="left" style="height: 40px; margin-right: 10px;">
        </a>
        <b style="font-size: 14px;">Derek Dahlsad</b><br>
        <a href="/blog/people/derek-dahlsad">[bio]</a> &nbsp;
        <a href="/blog/index.php?author=4">[articles]</a>
        <br clear="all">
      </li>
      <li class="val-ubell">
        <a href="/blog/people/val-ubell">
          <img src="/images/blog/avatar-val-ubell.png" align="left" style="height: 40px; margin-right: 10px;">
        </a>
        <b style="font-size: 14px;">Val Ubell</b><br>
        <a href="/blog/people/val-ubell">[bio]</a> &nbsp;
        <a href="/blog/index.php?author=8">[articles]</a>
        <br clear="all">
      </li>
    </ul>
  </li>
  <!-- Blog Sidebar //-->
</ul>
<?php endif; ?>
