<footer class="sl-footer">
  <div class="footer-left col-lg-6">
    <div class="mg-b-2">This COVID-19 Self Assessment System is only for software development purpose and may not yield actual result. Any information given by users of this system will not be disclosed or store to anywhere.</div>
  </div>
  <div class="footer-right d-flex align-items-center">
    <span class="tx-uppercase mg-r-10">Share:</span>
    <a target="_blank" class="pd-x-5" href="/"><i class="fa fa-facebook tx-20"></i></a>
    <a target="_blank" class="pd-x-5" href="/"><i class="fa fa-twitter tx-20"></i></a>
  </div>
</footer>
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="asset/lib/jquery/jquery.js"></script>
<script src="asset/lib/popper.js/popper.js"></script>
<script src="asset/lib/bootstrap/bootstrap.js"></script>
<script src="asset/lib/jquery-ui/jquery-ui.js"></script>
<script src="asset/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="asset/lib/highlightjs/highlight.pack.js"></script>
<script src="asset/lib/jquery.steps/jquery.steps.js"></script>
<script src="asset/lib/parsleyjs/parsley.js"></script>
<script src="asset/lib/select2/js/select2.min.js"></script>
<script src="asset/lib/spectrum/spectrum.js"></script>
<script src="asset/lib/datatables/jquery.dataTables.js"></script>
<script src="asset/lib/datatables-responsive/dataTables.responsive.js"></script>

<script src="asset/js/starlight.js"></script>
<script>
  $(document).ready(function(){
    'use strict';

    $('#wizard2').steps({
      headerTag: 'h3',
      bodyTag: 'section',
      autoFocus: true,
      titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
      
    });


  });
</script>

<script>
  $(function(){

    'use strict';

    $('.select2').select2({
      minimumResultsForSearch: Infinity
    });

        // Select2 by showing the search
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });

        // Select2 with tagging support
        $('.select2-tag').select2({
          tags: true,
          tokenSeparators: [',', ' ']
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
          showPaletteOnly: true,
          showPalette:true,
          color: '#DC3545',
          palette: [
          ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
          ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
          ]
        });

      });
    </script>

    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

  </body>
  </htm