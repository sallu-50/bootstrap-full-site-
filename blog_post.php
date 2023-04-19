<?php
include ('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog Post</title>
  <link rel="stylesheet" href="blog.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div id="card" class="card"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
   $(document).ready(function() {
  $.getJSON('https://admin.qolabb.com/api/blog_list', function(data) {
    var url = new URLSearchParams(window.location.search);
    // $.each(data, function(i, item) {
        var item = data[url.get('id')];
      var card = $('<div>').addClass('card shadow border-0 bg-lightt my-4 rounded flex-item');
      var image = $('<img>').addClass('single_img').attr('src', item.image).attr('alt', item.title);
      var authorLink = $('<a>').addClass('author').attr('href', item.authorLink).html('<i class="fa fa-user px-2" aria-hidden="true"></i>' + item.author);
      var dateLink = $('<a>').addClass('').attr('href', item.dateLink).html('<i class="fa fa-calendar px-2" aria-hidden="true"></i>' + item.date);
      var titleLink = $('<a>').addClass('title').attr('href', 'blog_post.html?id=' + item.id).html('<h4>' + item.title + '</h4>');
        var bodyLink = $('<a>').addClass('body').attr('href', item.body).html('<i class="fa fa-calendar px-2" aria-hidden="true"></i>' + item.date);

     
            var bodyLink = $('<div>').addClass('body_font').attr('href', item.body).html('<h>' + item.body + '</h>');
      var bodyPreview = $('<p>').html(item.body.substring(0, 300)); // Show the first 5 lines (assuming 60 characters per line)
      var bodyFull = $('<p>').html(item.body);
      bodyFull.hide(); // Hide the full body by default

      var toggleLink = $('<a>').addClass('text-primary').html('').attr('href', 'blog_post.html');
      toggleLink.on('click', function(e) {
        e.preventDefault();
        window.location.href = $(this).attr('href');
      });
     

      bodyLink.append(bodyPreview, toggleLink, bodyFull);

      var linkDiv = $('<div>').addClass('author_date');
      linkDiv.append(authorLink, dateLink);

      card.append(image, linkDiv, titleLink, bodyLink);
      $('#card').append(card);
    // });
  });
});

  </script>

<?php
include ('footer.php');
?>
</body>
</html>
