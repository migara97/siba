/* globals $*/

$.fn.tableTotal = function tableTotal(args){
  const $headerRow = this.find('thead tr');
  const $tbody = this.find('tbody');
  const $rows = this.find('tbody tr');
  const $totalHeaderCell = $('<th>Total</th>');
  const $totalRow = $('<tr></tr>');
  const $grandTotalCell = $('<td></td>');
  const colTotals = [];
  const userOptions = args || {};
  let grandTotal = 0;

  const o = {
    totalRow: true,
    totalCol: true,
    bold: true,
  };

  $.extend(o, userOptions);

  if (o.totalCol) {
    $headerRow.append($totalHeaderCell);
  }

  $rows.each(function eachRow() {
    const $row = $(this);
    const $cells = $row.find('td');
    const $totalCell = $('<td></td>');
    let rowTotal = 0;

    $cells.each(function eachCell(i) {
      const $cell = $(this);

      if ($.isNumeric($cell.text())) {
        const n = +$cell.text();

        if (typeof colTotals[i] === 'undefined') {
          colTotals[i] = 0;
        }

        rowTotal += n;
        colTotals[i] += n;
      }
    });

    if (o.totalCol) {
      if (o.bold) {
        $totalCell.css('font-weight', 'bold');
      }

      $totalCell.text(rowTotal);
      $row.append($totalCell);
    }
  });

  if (o.totalRow) {
    let i;

    $totalRow.append('<th>Total</th>');

    for (i = 0; i < colTotals.length; i += 1) {
      const $cell = $('<td></td>');

      grandTotal += colTotals[i];

      $cell.text(colTotals[i]);
      $totalRow.append($cell);
    }

    $grandTotalCell.text(grandTotal);

    if (o.totalCol) {
      $totalRow.append($grandTotalCell);
    }

    if (o.bold) {
      $totalRow.css('font-weight', 'bold');
    }

    $tbody.append($totalRow);
  }

  return this;
};



 <script>
     $(document).ready(function()
     {

        ("#cal").onclick(function()
            {
        $('tr').each(function()
        {
            var Re=0;
            $(this).find('.form-control').each(function()
            {
                var marks=$(this).text();
                if (marks.length!==0) {
                    Re+=parseFloat(marks);
                }

            });
                $(this).find('#re').html('='+Re)
            });
        });
     });
 </script>



 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




  <script language="javascript">
       function addNumbers(){

    var val1 = document.getElementById('assiment').value;
    var val2 = document.getElementById('paper').value;
    
    var ansD = document.getElementById("re");
    ansD.value = val2+val1;

    // alert(res);

    }
    </script>




    
 <script language="javascript">

        $("#cal").onclick(function addNumbers()
            {
        $('tr').each(function()
        {
            var Re=0;
            $(this).find('.form-control').each(function()
            {
                var marks=$(this).text();
                if (marks.length!==0) {
                    Re+=parseFloat(marks);
                }

            });
                $(this).find('#re').innerHTML('='+Re)
            });
        });
 </script>
