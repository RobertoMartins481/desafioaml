<?php
include("menu.inc.php");
?>       

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>RESPOSTAS - DESAFIO AML GROUP<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                       
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                                       <p class="text-muted font-13 m-b-30">
                     
                    </p>

 <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th></th> 
                          <th>PERGUNTA</th>
                          <th>RESPOSTA</th>
                           </tr>

                      </thead>
<tbody>
<?php
$servername = "162.214.187.112";
$database = "desafioa_base";
$username = "desafioa_admin";
$password = "W4Ys75XvE*VV";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


     $sql = "SELECT SUM(REPLACE(REPLACE(valor_transacao, '.', ''), ',', '.')) as total FROM tbl_cpgf";
     $query = mysqli_query($conn, $sql);
     $data = mysqli_fetch_array($query);
     $total_cpgf = number_format($data[total], '2', ',', '.');





            echo "<tr>
            <td>K</td>
            <td style='text-transform:uppercase'>Qual a soma total das movimentações utilizando o CPGF?</td>
            <td style='text-transform:uppercase'>R$ $total_cpgf</td></tr>";

     $sql_sigiloso = "SELECT SUM(REPLACE(REPLACE(valor_transacao, '.', ''), ',', '.')) as total_sigiloso FROM tbl_cpgf where nome_portador='Sigiloso'";
     $query_sigiloso = mysqli_query($conn, $sql_sigiloso);
     $data_sigiloso = mysqli_fetch_array($query_sigiloso);
     $total_sigiloso = number_format($data_sigiloso[total_sigiloso], '2', ',', '.');


            echo "<tr>
            <td>L</td>
            <td style='text-transform:uppercase'>Qual a soma das movimentações sigilosas?</td>
            <td style='text-transform:uppercase'>R$ $total_sigiloso</td></tr>";


     $sql_sigiloso_orgao = "SELECT SUM(REPLACE(REPLACE(valor_transacao, '.', ''), ',', '.')) as total_sigilo,codigo_orgao,orgao_codigo,orgao_nome FROM tbl_cpgf where nome_portador='Sigiloso' group by orgao_codigo ORDER BY total_sigilo DESC limit 1";
     $query_sigiloso_orgao = mysqli_query($conn, $sql_sigiloso_orgao);
     $data_sigiloso_orgao = mysqli_fetch_array($query_sigiloso_orgao);
     $total_sigilo_orgao = number_format($data_sigiloso_orgao[total_sigilo], '2', ',', '.');


            echo "<tr>
            <td>M</td>
            <td style='text-transform:uppercase'>Qual o Órgão que mais realizou movimentações sigilosas no período e qual o valor (somado)?</td>
            <td style='text-transform:uppercase'>$data_sigiloso_orgao[orgao_nome]: R$ $total_sigilo_orgao</td></tr>";


     $sql_portador = "SELECT SUM(REPLACE(REPLACE(valor_transacao, '.', ''), ',', '.')) as total_portador,codigo_orgao,orgao_codigo,orgao_nome,transacao,cpf,nome_portador FROM tbl_cpgf where transacao='SAQUE CASH/ATM BB' group by cpf ORDER BY total_portador DESC limit 1";
     $query_portador = mysqli_query($conn, $sql_portador);
     $data_portador = mysqli_fetch_array($query_portador);
     $total_portador = number_format($data_portador[total_portador], '2', ',', '.');


            echo "<tr>
            <td>N</td>
            <td style='text-transform:uppercase'>Qual o nome do portador que mais realizou saques no período? Qual a soma dos saques realizada por ele? Qual o nome do Órgão desse portador?</td>
            <td style='text-transform:uppercase'>$data_portador[orgao_nome] - $data_portador[nome_portador]: R$ $total_portador</td></tr>";



     $sql_favorecido = "SELECT SUM(REPLACE(REPLACE(valor_transacao, '.', ''), ',', '.')) as total_favorecido,cnpj_cpf_favorecido,nome_favorecido,transacao,valor_transacao FROM tbl_cpgf where transacao='COMPRA A/V - R$ - APRES' group by cnpj_cpf_favorecido ORDER BY total_favorecido DESC limit 1";
     $query_favorecido = mysqli_query($conn, $sql_favorecido);
     $data_favorecido = mysqli_fetch_array($query_favorecido);
     $total_favorecido = number_format($data_favorecido[total_favorecido], '2', ',', '.');


            echo "<tr>
            <td>O</td>
            <td style='text-transform:uppercase'>Qual o nome do favorecido que mais recebeu compras realizadas utilizando o CPGF?</td>
            <td style='text-transform:uppercase'>$data_favorecido[nome_favorecido]: R$ $total_favorecido</td></tr>";


mysqli_close($conn);            
                         
?>

                   </tbody>
                    </table>


                  </div>
                </div>
              </div>

        <!-- footer content -->
<footer>
          <div class="pull-right">
               
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>



   <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
 