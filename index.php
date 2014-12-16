<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en" xml:lang="en">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="language" content="english" />
	<title>CEU Locations</title>
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
        "bProcessing": true,
        "iDisplayLength": 100,
        "bLengthChange": false,
        "bInfo": false,
        "bPaginate": false,
        "bSort": true,

        "aaSorting": [[ 0, "asc" ]],

        "aoColumns": [
          { "mData": "building", "sClass": "building" },
          { "mData": "floor", "sClass": "floor" },
          { "mData": "room", "sClass": "room" },
          { "mData": "unit", "sClass": "unit" },
        ],
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
      <h1>CEU Locations</h1>
      <a id="logo" title="Visit CEU Website" alt="Visit CEU Website" target="_blank" href="http://www.ceu.hu"><img title="CEU Logo" alt="CEU Logo" src="images/logo.png" /></a>
    </div>
    <div id="description">
      <h2>Disclaimer</h2>
      <p>Disclaimer Proin pellentesque orci lectus, sit amet cursus velit varius sed. Nulla interdum enim sit amet ultrices tincidunt. Aenean suscipit, dolor ut vulputate sodales, mi nibh bibendum eros, ac consectetur mauris nulla sit amet lorem. Curabitur at rhoncus dolor. Sed orci felis, euismod id imperdiet id, sollicitudin at enim. Fusce ut ultrices ipsum, eget tincidunt lorem. Sed at posuere est. Praesent in diam at mi tincidunt eleifend. Integer vitae neque eros. Phasellus pulvinar eleifend elit porta aliquet.</p>
      <p>Duis vulputate a neque at feugiat. Cras ut mauris feugiat, congue lacus nec, vestibulum tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras auctor pharetra mauris, id molestie est bibendum ut. Aliquam erat volutpat. Fusce purus felis, condimentum sit amet enim et, faucibus dapibus erat. Mauris consectetur porta augue a consequat. Maecenas ac ipsum rutrum, lacinia quam et, maximus dolor. Duis consequat porttitor pellentesque. Nulla pretium blandit auctor. Phasellus eu congue erat. </p>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
      <thead>
        <tr>
          <th>Building</th>
          <th>Floor</th>
          <th>Room</th>
          <th>Unit</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $url = 'https://spreadsheets.google.com/feeds/list/1YAzHpUb-h_NrbttEekh_hTBDqT_7Dxe9Czgg1_8l9V8/od6/public/values?alt=json';
          $file = file_get_contents($url);

          $json = json_decode($file);
          $rows = $json->{'feed'}->{'entry'};

          foreach ($rows as $row) {
            echo "<tr>\n";
            echo "\t<td>" . $row->{'gsx$building'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$floor'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$room'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$unit'}->{'$t'} . "</td>\n";
            echo "</tr>\n";
          }
        ?>
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

