<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en" xml:lang="en">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="language" content="english" />
	<title>CEU Faculty Experts</title>
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
        "bSort": false,
        "sAjaxDataProp": "feed.entry",
        "sAjaxSource": "https://spreadsheets.google.com/feeds/list/0AqR2zsbu5T9qdEZTWjdUWjRLSWdFSFdqd09FSlFRcHc/od6/public/values?alt=json",
        
        "aoColumns": [                 
          { "mData": "gsx$lastname.$t", "sClass": "name" },
          { "mData": "gsx$firstname.$t", "sClass": "name-first" },
          { "mData": "gsx$departmentunit.$t", "sClass": "unit" },
          { "mData": "gsx$specializations.$t", "sClass": "specializations" },
          { "mData": "gsx$email.$t", "sClass": "contact" },
          { "mData": "gsx$languages.$t", "sClass": "languages" },
          { "mData": "gsx$ceuvideo.$t", "sClass": "ceuvideo" },
          { "mData": "gsx$telephone.$t", "sClass": "phone" },
        ],
        
        "aoColumnDefs": [
          {
            // `data` refers to the data for the cell (defined by `mData`, which
            // defaults to the column being worked with, in this case is the first
            // Using `row[0]` is equivalent.
            "mRender": function ( data, type, row ) {
              return '<h2>' + row.gsx$lastname.$t + ' ' + row.gsx$firstname.$t + '</h2><p>' + row.gsx$departmentunit.$t + '</p>';
            },
            "aTargets": [ 0 ]
          },
          {
            "mRender": function ( data, type, row) {
              return '<p>' + row.gsx$email.$t + '</p><p>' + row.gsx$telephone.$t + '</p>';
            },
            "aTargets": [ 4 ]
          },
          { "bVisible": false,  "aTargets": [ 1, 2, 7 ] },
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
      <h1>CEU Faculty Experts</h1>
    </div>
    <div id="description">
      <p>CEU experts can comment on a wide variety of topics from EU politics to innovation in business. Highly respected leaders in their fields, CEU faculty come from 40 countries and speak numerous languages. Using the keyword search below, you can find an expert by area of specialization, department, or name. The e-mail structure is as follows: lastname.firstinitial@ceu.hu (i.e. sharkeyc@ceu.hu). The main CEU phone number is +1 36 327-3000 (operator). The 328 exchange is also used at CEU. Most professors can be reached at their direct extensions (i.e. 327-2321). Please contact one of our media relations professionals for additional information: Ildiko Rull (Hungarian media relations) extension 3800 or Colleen Sharkey (international media relations) extension 2321.<br />To view recent examples of CEU experts in the media, visit <a href="https://www.ceu.hu/news/archive/5882" title="CEU in the Hungarian Media">CEU in the Hungarian Media</a> and <a href="https://www.ceu.hu/news/archive/5780" title="CEU in the International Media">CEU in the International Media.</a></p>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
      <thead>
        <tr>
          <th>Name</th>
          <th>First name</th>
          <th>Department/Unit</th>
          <th>Specializations</th>
          <th>Contact</th>
          <th>Languages</th>
          <th>Video &amp; Related links</th>
          <th>Telephone</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
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