@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<!--add data-->
      
            
            <div class="col-lg-12 col-md-11">
                <div class="card">
                    <div class="header">
						<div class="row">
							<div class="col-lg-6">
							</div>
							
						</div>
						<hr>
                    </div>
                    <div class="content">
                    	<div class="table-responsive">
                    	<table id="data" class="table table-striped table-bordered"  cellspacing="0" width="100%">
							<tr>
                                <th>#</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Amount</th>
                                <th>date</th>
                            </tr>
							
							@foreach($data as $row)
                                <tr>
                                    <td>{{$row->transfer_id}}</td>
                                    <td>{{$row->transfer_account_from}}</td>
                                    <td>{{$row->transfer_account_to}}</td>
                                    <td>{{$row->amount}}</td>
                                    <td>{{ date('Y-m-d',strtotime($row->date))}}</td>
                                </tr>
                            @endforeach
						</table>
                      
					</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>	

<script>


$(document).ready(function() {
	$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
	});
   	
    // $('#data').dataTable( {
    //     "processing": true,
    //     "serverSide": true,
    //     ajax: {
    //         "url": "{{ url('account/getAllTranferHistory')}}",
    //     },
    //     "columns": [
    //         { "data": "transfer_id" },
    //         { "data": "transfer_account_from" },
    //         { "data": "transfer_account_to" },
    //         { "data": "amount" },
    //         { "data": "date" },
    //     ]
    // } );
	
// $('#datae').DataTable( {

// processing: true,
// serverSide: true,
// 'lengthMenu' : [
//             [ 10, 25, 50,100, -1 ],
//             [ '10', '25', '50','100', '<?php echo trans('lang.overall');?>' ]
// ],
// ajax: "{{ url('account/getAllTranferHistory')}}",
// "language": {
// "decimal":        "",
//     "emptyTable":     "<?php echo trans('lang.demptyTable');?>",
//     "info":           "<?php echo trans('lang.dshowing');?> _START_ <?php echo trans('lang.dto');?> _END_ <?php echo trans('lang.dof');?> _TOTAL_ <?php echo trans('lang.dentries');?>",
//     "infoEmpty":      "<?php echo trans('lang.dinfoEmpty');?>",
//     "infoFiltered":   "(<?php echo trans('lang.dfilter');?> _MAX_ <?php echo trans('lang.total');?> <?php echo trans('lang.dentries');?>)",
//     "infoPostFix":    "",
//     "thousands":      ",",
//     "lengthMenu":     "<?php echo trans('lang.dshow');?> _MENU_ <?php echo trans('lang.dentries');?>",
//     "loadingRecords": "<?php echo trans('lang.dloadingRecords');?>",
//     "processing":     "<?php echo trans('lang.dprocessing');?>",
//     "search":         "<?php echo trans('lang.dsearch');?>",
//     "zeroRecords":    "<?php echo trans('lang.dzeroRecords');?>",
//     "paginate": {
//         "first":      "<?php echo trans('lang.dfirst');?>",
//         "last":       "<?php echo trans('lang.dlast');?>",
//         "next":       "<?php echo trans('lang.dnext');?>",
//         "previous":   "<?php echo trans('lang.dprevious');?>"
//     }
// },
// columns: [
//     {
//     "class":          "details-control",
//     "orderable":      false,
//     "searchable":      false,
//     "data":           null,
//     "defaultContent": ""
//     },
//     { data: 'transfer_id', orderable: false, searchable: false, visible: false},
//     { data: 'transfer_account_from', orderable: false, searchable: false, visible: false},
//     { data: 'transfer_account_to'},
//     { data: 'amount'},
//     { data: 'date'},
//     {data: 'action',  orderable: false, searchable: false}
// ],
// dom: 'Bfrtipl',
// buttons: [
//     {
//         extend: 'copy',
//         text:   'Copy <i class="fa fa-files-o"></i>',
//         title: '<?php echo trans('lang.transfers');?>',
//         className: 'btn btn-sm btn-fill btn-info ',
//         exportOptions: {
//             columns: [ 3, 4, 5, 6 ]
//         }
//     },
//     {
//         extend:'csv',
//         text:   'CSV <i class="fa fa-file-excel-o"></i>',
//         title: '<?php echo trans('lang.transfers');?>',
//         className: 'btn btn-sm btn-fill btn-info ',
//         exportOptions: {
//             columns: [ 3, 4, 5, 6 ]
//         }
//     },
//     {
//         extend:'pdf',
//         text:   'PDF <i class="fa fa-file-pdf-o"></i>',
//         title: '<?php echo trans('lang.transfers');?>',
//         orientation:'landscape',
//         className: 'btn btn-sm btn-fill btn-info ',
//         exportOptions: {
//             columns: [3, 4, 5, 6 ]
//         },
//         customize : function(doc){
//             doc.styles.tableHeader.alignment = 'left';
//             doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
//         }
//     },
//     {
//         extend:'print',
//         text:   'Print <i class="fa fa-print"></i>',
//         className: 'btn btn-sm btn-fill btn-info ',
//         exportOptions: {
//             columns: [ 3, 4, 5, 6 ]
//         }
//     }
// ]
// } );


		
		
});
		

</script>
@endsection