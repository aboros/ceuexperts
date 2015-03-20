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
      <?php
        // Hint:
        // Ask for your worksheet feed by going to:
        // https://spreadsheets.google.com/feeds/worksheets/YOUR_SPREADSHEET_ID/private/full
        $sheet_url = 'https://spreadsheets.google.com/feeds/list/1YAzHpUb-h_NrbttEekh_hTBDqT_7Dxe9Czgg1_8l9V8/omsh57p/public/values?alt=json'; 
        $sheet_file = file_get_contents($sheet_url);
        $json = json_decode($sheet_file);

        $title = $json->{'feed'}->{'entry'}[0]->{'gsx$title'}->{'$t'};
        echo '<h2>' . $title . '</h2>';

        $value =  $json->{'feed'}->{'entry'}[0]->{'gsx$value'}->{'$t'};
        echo '<p>' . $value . '</p>';
      ?>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
      <thead>
        <tr>
          <?php
            $url = 'https://spreadsheets.google.com/feeds/list/1YAzHpUb-h_NrbttEekh_hTBDqT_7Dxe9Czgg1_8l9V8/od6/public/values?alt=json';
            $file = file_get_contents($url);

            $json = json_decode($file);
            $rows = $json->{'feed'}->{'entry'};
            $row = reset($rows);
            foreach (get_object_vars($row) as $key => $item) {
              if (substr($key, 0, 4) === 'gsx$') {
                echo "\t<th>" . substr($key, 4) . "</th>\n";
              }
            }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($rows as $row) {
            //var_dump($row);
            echo "<tr>\n";
            foreach (get_object_vars($row) as $key => $item) {
              if (substr($key, 0, 4) === 'gsx$') {
                echo "\t<td>" . $row->{$key}->{'$t'} . "</td>\n";
              }
            }
            echo "</tr>\n";
          }
        ?>
      </tbody>
    </table>
  </div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3199669-46', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
