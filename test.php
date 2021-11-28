
<script>
$("#search_field").on("keyup", function () {
  var value = $(this).val();
  var patt = new RegExp(value, "i");

  $("#fid_table")
    .find("tr")
    .each(function () {
      var $table = $(this);

      if (!($table.find("td").text().search(patt) >= 0)) {
        $table.not(".t_head").hide();
      }
      if ($table.find("td").text().search(patt) >= 0) {
        $(this).show();
      }
    });
});

    </script>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search..." id="search_field">
      </form>
    </div>
  </div>
</nav>


<div class="container">

  <br><br><br><br>
  <div class="row">
    <div class="col-md-6">

    <table id="fid_table" class="table table-striped">
      <thead>
        <tr class="t_head">
          <th>ID</th>
          <th>Description</th>
        </tr>
      </thead>
      <tr>
        <td>1</td>
        <td>James</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Sally</td>
      </tr>
      <tr>
        <td>3</td>
        <td>John</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Peter</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Dalton</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Bobby</td>
      </tr>

    </table>
</div>
  </div>
</div>
