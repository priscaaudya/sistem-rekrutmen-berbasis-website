@extends('dashboard.layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="/schedulesreport">Laporan Agenda Seleksi</a></li>
@endsection

@section('container')

    <!-- DataTables Kategori Lowongan -->
<div class="card-header">
    <h5 class="m-0 font-weight-bold text-primary" style="text-align: center">Laporan Agenda Seleksi</h5>
</div>        
<div class="table-responsive">
    <table id="schedulesreport" class="table table-striped table-bordered zero-configuration" style="border: 1">
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Posisi</th>
                <th>Seleksi</th>
                <th>Tempat</th>
                <th>Tanggal Test</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
            <tr align="center">
                <td >{{ $loop->iteration }}</td>
                <td align="left">{{ $schedule->job->position }}</td>
                <td align="left">{{ $schedule->selection_type->name }}</td>
                <td align="left">{{ $schedule->location }}</td>
                <td>{{ Carbon\Carbon::parse($schedule->date)->format("d/m/Y") }}</td>
                <td>{{ Carbon\Carbon::parse($schedule->time)->format("G.i") }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>  

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#schedulesreport').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                title: 'Laporan Lowongan',
                titleAttr: 'Excel'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o"></i>',
                title: 'Laporan Lowongan',
                titleAttr: 'PDF',
                download: 'open',
				messageTop: 'Berikut data agenda seleksi:',
                customize: function (doc) {
						//Remove the title created by datatTables
						doc.content.splice(0,1);
						//Create a date string that we use in the footer. Format is dd-mm-yyyy
						var now = new Date();
						var jsDate = now.getDate()+'-'+(now.getMonth()+1)+'-'+now.getFullYear();
						// Logo converted to base64
						// var logo = getBase64FromImageUrl('https://datatables.net/media/images/logo.png');
						// The above call should work, but not when called from codepen.io
						// So we use a online converter and paste the string in.
						// Done on http://codebeautify.org/image-to-base64-converter
						// It's a LONG string scroll down to see the rest of the code !!!
						var logo = 'data:image/png;base64,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';
						// A documentation reference can be found at
						// https://github.com/bpampuch/pdfmake#getting-started
						// Set page margins [left,top,right,bottom] or [horizontal,vertical]
						// or one number for equal spread
						// It's important to create enough space at the top for a header !!!
						doc.pageMargins = [20,150,20,30];
						// Set the font size fot the entire document
						doc.defaultStyle.fontSize = 12;
						// Set the fontsize for the table header
						doc.styles.tableHeader.fontSize = 12;
						// Create a header object with 3 columns
						// Left side: Logo
						// Middle: brandname
						// Right side: A document title
						doc['header']=(function() {
							return {
								columns: [
									{
										image: logo,
										width: 100
									},
									{

									},
									{
										alignment: 'left',
										fontSize: 12,
										text: [
											'Rumah Sakit Umum ANANDA\n',
											'Jl. Pemuda No. 30\n',
											'Purwokerto 53132 – Jawa Tengah\n',
											'Telp: 0281-636417 / 631435\n',
											'Fax: 0281-640226\n',
											'email: info@rsananda.co.id'
										]
									}
								],
								margin: 20
							}
						});
						// Create a footer object with 2 columns
						// Left side: report creation date
						// Right side: current page and total pages
						doc['footer']=(function(page, pages) {
							return {
								columns: [
									{
										alignment: 'left',
										text: ['Created on: ', { text: jsDate.toString() }]
									},
									{
										alignment: 'right',
										text: ['page ', { text: page.toString() },	' of ',	{ text: pages.toString() }]
									}
								],
								margin: 20
							}
						});
						// Change dataTable layout (Table styling)
						// To use predefined layouts uncomment the line below and comment the custom lines below
						// doc.content[0].layout = 'lightHorizontalLines'; // noBorders , headerLineOnly
						var objLayout = {};
						objLayout['hLineWidth'] = function(i) { return .5; };
						objLayout['vLineWidth'] = function(i) { return .5; };
						objLayout['hLineColor'] = function(i) { return '#aaa'; };
						objLayout['vLineColor'] = function(i) { return '#aaa'; };
						objLayout['paddingLeft'] = function(i) { return 4; };
						objLayout['paddingRight'] = function(i) { return 4; };
						doc.content[0].layout = objLayout;
				}
        }
            ]
        } );
    } );
    
</script>
@endsection