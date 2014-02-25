<?php include "inc/top.php"; ?>

<div class="row content-box">
  <h1>Social Media</h1>

  <div class="twelve columns main-content">
    <dl class="tabs three-up">
      <dd class="active"><a href="#simple1">Facebook</a></dd>  
      <dd><a href="#simple2">Twitter</a></dd>
      <dd><a href="#simple3">YouTube</a></dd>
    </dl>  

    <ul class="tabs-content">
      <li class="active" id="simple1Tab">
        <!-- Facebook BEGIN -->
        <ul id="facebook">
          <li>Loading…</li>
        </ul>
        <br>
        <ul id="facebook_albums">
          <li>Loading…</li>
        </ul>

        <script id="facebook_template" type="text/x-jquery-tmpl">
          {{if (type != "status" || typeof message != "undefined") && (type != "link" || typeof message != "undefined")}}
          <li>
            <div class="header">
              <a href="http://www.facebook.com/profile.php?id=${from.id}" target="_blank"><img alt="picture" src="https://graph.facebook.com/${from.id}/picture">
              </a>
              <a href="http://www.facebook.com/profile.php?id=${from.id}" target="_blank"><strong>${from.name}</strong>
              </a>
              {{if type == "link"}}
              shared a
              <a href="http://www.facebook.com/profile.php?id=${from.id}" target="_blank">link</a>
              {{/if}}
              <br>
              <abbr class="timeago" title="${created_time}">${created_time}</abbr>
            </div>
            <p>
              {{html message}}
            </p>
            {{if type == "link"}}
            <div class="link">
              <a href="${link}" target="_blank">{{if picture}}
                <img alt="picture" src="${Social.facebookPictureURL(picture)}">
                {{/if}}
                <strong>${name}</strong>
              </a>
              <i>${caption}</i>
              {{if description}}
              <p>${description}</p>
              {{/if}}
            </div>
            {{else}}
            {{if picture}}
            <div>
              <a href="${link}" target="_blank"><img alt="picture" src="${Social.facebookPictureURL(picture)}">
              </a>
            </div>
            {{/if}}
            {{/if}}
          </li>
          {{/if}}
        </script>

        <script id="facebook_album_template" type="text/x-jquery-tmpl">
          {{if type != "friends_walls"}}
          <li>
            <a href="${link}" target="_blank"><img src="https://graph.facebook.com/${id}/picture?type=album" alt="picture"></a>
            <a href="${link}" target="_blank">${name}</a>
            <span>
              {{if count}}
              {{if count == 1}}
              1 photo
              {{else}}
              ${count} photos
              {{/if}}
              {{/if}}
            </span>
          </li>
          {{/if}}
        </script>

        <script>
          // "103882419703669" is Facebook page ID
          // "392120024178056|aqQUlwOblkyuLzKmxZm39SeBVck" is Facebook authentication token
          $(function() {
            Social.facebook("478963585508160", "392120024178056|aqQUlwOblkyuLzKmxZm39SeBVck");
            //Social.facebook("158761784157668", "392120024178056|aqQUlwOblkyuLzKmxZm39SeBVck");
          });
        </script>
        <!-- Facebook END -->
      </li>

      <li id="simple2Tab">
        <!-- Twitter BEGIN -->
        <ul id="twitter">
          <li>Loading…</li>
        </ul>
        <script id="twitter_template" type="text/x-jquery-tmpl">
          <li>
            <p>
              {{html tweet}}
            </p>
          </li>
        </script>
        <script>
          // "423772945698148352" is Twitter widget ID (you need to create widget on Twitter website first)
          $(function() {
            Social.twitter("438337990494924800");
          });
        </script>
        <!-- Twitter END -->
      </li>

      <li id="simple3Tab">
        <div id="youtube_player">
          <iframe width="420" height="315" src="//www.youtube.com/embed/w64vLxUzUjU?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </li>
    </ul>
  </div>
</div>

<?php include "inc/bottom-newsletter.php"; ?>
<?php include "inc/bottom.php"; ?>
<?php include "inc/java-social.php"; ?>