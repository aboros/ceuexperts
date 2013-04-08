<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en" xml:lang="en">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="language" content="english" />
	<title>CEU Experts</title>
  <style type="text/css" title="currentStyle">
  @import "stylesheets/table.css";
  @import "stylesheets/jquery.dataTables.css";
  @import "stylesheets/page.css";
  </style>
  <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#example').dataTable( {
        "bServerSide": false,
        "bProcessing": true,
        "iDisplayLength": 100,
        "bLengthChange": false,
        "bInfo": false,
        "bPaginate": false,
        "sAjaxDataProp": "feed.entry",
        "sAjaxSource": "https://spreadsheets.google.com/feeds/list/0AqR2zsbu5T9qdEZTWjdUWjRLSWdFSFdqd09FSlFRcHc/od6/public/values?alt=json",
        
        "aoColumns": [                 
          { "mData": "gsx$lastname.$t", "sClass": "name-last" },
          { "mData": "gsx$firstname.$t", "sClass": "name-first" },
          { "mData": "gsx$departmentunit.$t", "sClass": "unit" },
          { "mData": "gsx$title.$t", "sClass": "title" },
          { "mData": "gsx$specializations.$t", "sClass": "specializations" },
          { "mData": "gsx$email.$t", "sClass": "email" },
          { "mData": "gsx$languages.$t", "sClass": "languages" },
          { "mData": "gsx$ceuvideo.$t", "sClass": "ceuvideo" },
          { "mData": "gsx$tags.$t", "sClass": "tags" },
          { "mData": "gsx$telephone.$t", "sClass": "phone" },
        ],
        
        "aoColumnDefs": [
          {
            // `data` refers to the data for the cell (defined by `mData`, which
            // defaults to the column being worked with, in this case is the first
            // Using `row[0]` is equivalent.
            "mRender": function ( data, type, row ) {
              return '<h2>' + row.gsx$lastname.$t + ' ' + row.gsx$firstname.$t + '</h2><p>' + row.gsx$departmentunit.$t + '</p><p>' + row.gsx$title.$t + '</p>';
            },
            "aTargets": [ 0 ]
          },
          {
            "mRender": function ( data, type, row) {
              return '<p>' + row.gsx$email.$t + '</p><p>' + row.gsx$telephone.$t + '</p>';
            },
            "aTargets": [ 5 ]
          },
          { "bVisible": false,  "aTargets": [ 1, 2, 3, 9 ] },
        ]
      } );
    } );
  </script>
</head>
<?php
/**
 * We are using this Google Docs Spreadsheet as a datasource:
 * spreadsheet rss link: 	https://spreadsheets.google.com/feeds/list/0AqR2zsbu5T9qdEZTWjdUWjRLSWdFSFdqd09FSlFRcHc/od6/public/basic?alt=rss
 * spreadsheet json link:	https://spreadsheets.google.com/feeds/list/0AqR2zsbu5T9qdEZTWjdUWjRLSWdFSFdqd09FSlFRcHc/od6/public/values?alt=json
 */

?>
<body>
  <div id="page">
    <div id="header">
      <h1>CEU Experts</h1>
    </div>
    <div id="description">
      <p>At vero eos et accusam et justo duo dolores et ea rebum. <a href="#">Stet clita kasd gubergren, no sea takimata</a> sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
      <thead>
        <tr>
          <th>Name</th>
          <th>First name</th>
          <th>Department/Unit</th>
          <th>Title</th>
          <th>Specializations</th>
          <th>Contact</th>
          <th>Languages</th>
          <th>CEU Video</th>
          <th>Tags</th>
          <th>Telephone</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    <div id="footer">
      <p>At vero eos et accusam et justo duo dolores et ea rebum. <a href="#">Stet clita kasd gubergren, no sea takimata</a> sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
    </div>
  </div>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3199669-39']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>