var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.table-add').click(function () {
  var $last_num = ($TABLE.find('tr.hide').find('td'))[0].innerHTML;
  var $clone = $TABLE.find('tr.hide').clone(true);
  $TABLE.find('tr.hide').removeClass('hide');
  $clone.addClass('hide');
  ($clone.find('td'))[0].innerHTML = parseInt($last_num) + 1;
  ($clone.find('td'))[1].innerHTML = 0;
  ($clone.find('td'))[2].innerHTML = 0;
  ($clone.find('td'))[3].innerHTML = 0;
  ($clone.find('td'))[4].innerHTML = 0;
  ($clone.find('td'))[5].innerHTML = 0;
  $TABLE.find('table').append($clone);
});

$('.table-remove').click(function () {
  $(this).parents('tr').detach();
});

$('.table-up').click(function () {
  var $row = $(this).parents('tr');
  if ($row.index() === 1) return; // Don't go above the header
  $row.prev().before($row.get(0));
});

$('.table-down').click(function () {
  var $row = $(this).parents('tr');
  $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];

  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function () {
    headers.push($(this).text().toLowerCase());
  });

  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');
    var h = {};

    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      if(header != "#" && header != "action"){
        h[header] = $td.eq(i).text();
      }      
    });

    data.push(h);
  });

  // Output the result
  $EXPORT.text(JSON.stringify(data));
  // $EXPORT.value = JSON.stringify(data);
  $('#form_tambah_data').submit();
});