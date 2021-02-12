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
  <script type="text/javascript" language="javascript" src="js/linker.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#example').dataTable( {
        "bProcessing": true,
        "iDisplayLength": 100,
        "bLengthChange": false,
        "bInfo": false,
        "bPaginate": false,
        "bSort": false,
        "fnInitComplete": function(oSettings, json) {
          $('table td.ceuvideo').linker({target: 'blank'});
        },

        "aoColumns": [
          { "mData": "lastname", "sClass": "name" },
          { "mData": "firstname", "sClass": "name-first" },
          { "mData": "departmentunit", "sClass": "unit" },
          { "mData": "specializations", "sClass": "specializations" },
          { "mData": "email", "sClass": "contact" },
          { "mData": "languages", "sClass": "languages" },
          { "mData": "ceuvideo", "sClass": "ceuvideo" },
          { "mData": "telephone", "sClass": "phone" }
        ],

        "aoColumnDefs": [
          {
            // `data` refers to the data for the cell (defined by `mData`, which
            // defaults to the column being worked with, in this case is the first
            // Using `row[0]` is equivalent.
            "mRender": function ( data, type, row ) {
              return '<h2>' + row.lastname + ', ' + row.firstname + '</h2><p>' + row.departmentunit + '</p>';
            },
            "aTargets": [ 0 ]
          },
          {
            "mRender": function ( data, type, row) {
              return '<p>' + row.email + '</p><p>' + row.telephone + '</p>';
            },
            "aTargets": [ 4 ]
          },
          {
            "bVisible": false,
            "aTargets": [ 1, 2, 7 ]
          }
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
      <a id="logo" title="Visit CEU Website" alt="Visit CEU Website" target="_blank" href="http://www.ceu.hu"><img title="CEU Logo" alt="CEU Logo" src="images/logo.png" /></a>
    </div>
    <div id="description">
      <p>CEU faculty are available for expert commentary on a wide variety of subjects across the social sciences and humanities, including politics, extremism, media, business, environmental sciences, network and cognitive science, and public policy. Respected leaders in their fields, our faculty come from some 40 countries and speak numerous languages. Using the keyword search below, you can find an expert by area of specialization, unit, or name. The main CEU phone number is <a href="tel:+43-1-25230">+43.1.25230</a> in Austria and <a href="tel:+36-1-327-3000">+36.1.327.3000</a> in Hungary.</p>
      <p>For media support in English and Hungarian, please contact Media Relations Manager <a href="mailto:rulli@ceu.edu">Ildiko Rull</a>. For media support in German, contact Communications Officer <a href="mailto:matkovica@ceu.edu">Anita Matkovic</a>.</p>
      <p>Recent examples of CEU expert commentary:
        <ul>
          <li><a href="https://www.ceu.edu/taxonomy/term/111">CEU in the international media</a></li>
          <li><a href="https://www.ceu.edu/taxonomy/term/453">CEU in the Austrian media</a></li>
          <li><a href="https://www.ceu.edu/taxonomy/term/110">CEU in the Hungarian media</a></li>
        </ul>
      </p>
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
        <?php
          $url = 'https://spreadsheets.google.com/feeds/list/0AqR2zsbu5T9qdEZTWjdUWjRLSWdFSFdqd09FSlFRcHc/od6/public/values?alt=json';
          $file = file_get_contents($url);

          $json = json_decode($file);
          $rows = $json->{'feed'}->{'entry'};

          foreach ($rows as $row) {
            echo "<tr>\n";
            echo "\t<td>" . $row->{'gsx$lastname'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$firstname'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$departmentunit'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$specializations'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$email'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$languages'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$ceuvideo'}->{'$t'} . "</td>\n";
            echo "\t<td>" . $row->{'gsx$telephone'}->{'$t'} . "</td>\n";
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
