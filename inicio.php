<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html lang="en"> <!--<![endif]-->

<head>
  <?php include("./codigo_general/head.php"); ?>
  <!-- additional styles for plugins -->
  <!-- fullcalendar -->
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="./assets/skins/dropify/css/dropify.css">
</head>

<body class=" sidebar_main_open sidebar_main_swipe">
  <!-- main header -->
  <header id="header_main">
    <?php include('./codigo_general/header_main.php'); ?>        
  </header><!-- main header end -->
  <!-- main sidebar -->
  <aside id="sidebar_main">
    <!-- sidebar_main_header -->
    <?php include('./codigo_general/sidebar_main_header.php'); ?>

    <div class="menu_section">
      <?php include('./codigo_general/menu_section.php'); ?>
    </div>
  </aside><!-- main sidebar end -->
  <div id="page_content">
    <div id="page_content_inner">
      <!-- SubMenu de INDEX -->
      <div id="top_bar">
        <div class="md-top-bar ">
          <div class="uk-width-large-8-10 uk-container-center">
            <div class="md-card-content">
              <div class="uk-grid">
                <div class="uk-width-1-1">
                  <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1_content'}" id="tabs_1">
                    <li class="named_tab" id="inicio"><a href="" ><font size="3"> Inicio </font></a></li>
                    <li class="named_tab" id="ordenes"><a href="" ><font size="3"> Ordenes </font></a></li>
                    <li class="named_tab" id="productos"><a href="" ><font size="3"> Productos </font></a></li>
                    <li class="named_tab" id="cotizaciones"><a href="" ><font size="3"> Cotizaciones </font></a></li>
                    <li class="named_tab" id="notif"><a href="" ><font size="3"> Notificaciones </font></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end SubMenu de INDEX -->
      <div>
        <div id="tabs_1_content" class="uk-switcher">
         <div id="contenido_Inicio"><!-- Contenido de Pesta? Inicio -->
          <!-- indicadores -->
          <div class="uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-medium " data-uk-grid-margin>
            <div>
                <div class="md-card">
                 <div class="md-card-content">
                  <div class="md-list-content-horizontal">
                   <label class="md-list-heading uk-h3 "><i class="material-icons">&#xE875;</i>&nbsp;Pedidos</label>
                   <label class="md-list-heading uk-float-right uk-h2 uk-text-bold uk-text-middle" id="indicadorNumeroPedidos"></label>
                  </div>
                 </div>
                </div>
            </div>
            <div>
                 <div class="md-card">
                  <div class="md-card-content">
                   <div class="md-list-content-horizontal">
                    <label class="md-list-heading uk-h3"><i class="uk-icon-envelope"></i>&nbsp;Cotizaciones</label>
                    <label class="md-list-heading uk-float-right uk-h2 uk-text-bold uk-text-middle" id="indicadorNumeroCotizaciones"></label>
                   </div>
                  </div>
                 </div>
            </div>
            <div>
                 <div class="md-card">
                  <div class="md-card-content">
                   <div class="md-list-content-horizontal">
                    <label class="md-list-heading uk-h3"><i class="uk-icon-dollar"></i>&nbsp;Ventas</label>
                    <label class="md-list-heading uk-float-right uk-h2 uk-text-bold uk-text-middle" id="indicadorVentas"></label>
                   </div>
                  </div>
                 </div>
            </div>
            <!--<div>
                 <div class="md-card">
                  <div class="md-card-content">
                   <div class="md-list-content-horizontal">
                    <label class="md-list-heading uk-h3"><i class="uk-icon-clock-o"></i>&nbsp;Dís de Paquete</label>
                    <label class="md-list-heading uk-float-right uk-h2" id="idicadorDiasPaquete"></label>
                   </div>
                  </div>
                 </div>
            </div>-->
          </div>
          <div class="md-card"><br/>
           <div class="md-card-content">
            <div id="calendar_selectable"></div>
            <div><label><i class="uk-icon-hand-o-up"></i>&nbsp;Clic para visualizar Calendario  </label></div>
           </div>
          </div>           
         </div><!--  end Contenido de Pesta? Inicio -->
         <div id="contenido_Ordenes"><!-- Contenido de Pesta? Ordenes -->
          <h3 class="heading_b uk-margin-bottom"> Ordenes Por Entregar </h3>
          <div class="md-card uk-margin-medium-bottom" >
            <div class="md-card-content">
              <div class="uk-overflow-container">
                <table class="uk-table uk-table-nowrap table_check uk-table-hover tablesorter tablesorter-altair" id="tbl_ordenes">
                  <thead >
                    <tr>
                      <th class="uk-width-2-10 uk-text-center" >No. Orden </th>
                      <th class="uk-width-2-10 uk-text-center" >Fecha de Entrega</th>
                    </tr>
                  </thead>
                  <tbody id="tblordenes_item" name="tblordenes_item">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <h3 class="heading_b uk-margin-bottom"> Ordenes Pendientes </h3>
          <div class="md-card uk-margin-medium-bottom" >
            <div class="md-card-content">
              <div class="uk-overflow-container">
                <table class="uk-table uk-table-nowrap table_check uk-table-hover tablesorter tablesorter-altair" id="tbl_ordenespendiente">
                  <thead >
                    <tr>
                      <th class="uk-width-2-10 uk-text-center">No. Orden </th>
                      <th class="uk-width-2-10 uk-text-center">Fecha de Entrega</th>
                    </tr>
                  </thead>
                  <tbody id="tblordenespendiente_item" name="tblordenespendiente_item">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
         <h3 class="heading_b uk-margin-bottom"> Historial de Ordenes </h3>
         <div class="md-card uk-margin-medium-bottom">
          <div class="md-card-content">
           <div class="uk-overflow-container">
            <table class="uk-table uk-table-nowrap table_check uk-table-hover tablesorter tablesorter-altair" id="tbl_ordeneshistorial">
              <thead>
               <tr>
                <th class="uk-width-2-10 uk-text-center">No. Orden </th>
                <th class="uk-width-1-10 uk-text-center">Total de Compra</th>
                <th class="uk-width-2-10 uk-text-center">Fecha Deposito</th>
                <th class="uk-width-2-10 uk-text-center">Status Deposito</th>
               </tr>
              </thead>
             <tbody id="tblordeneshistorial_item" name="tblordeneshistorial_item">
            </tbody>
           </table>
          </div>
         </div>
        </div>
        <div id="ordenes_add"><!--POP DETALLE DE ORDEN-->
          <div class="uk-modal" id="detalleOrdenPendiente">
           <div class="uk-modal-dialog uk-modal-dialog-large">
            <button type="button" class="uk-modal-close uk-close"></button>
            <div class="uk-modal-header">
             <h3 class="uk-modal-title"><i class="material-icons" >&#xE878;</i>&nbsp;Detalle de Orden </h3>
            </div>
            <div class="uk-grid">
             <div class="uk-width-large-1-2" id="marcarorden"></div>
             <div  class="uk-width-large-1-2" id="botondeubicacion"><!--Se agregara el boton, para visualizar el mapa, desde AJAX si el servicio es a domicilio -->
             </div>
            </div>
            <form id="form_detalleOrden" name="form_detalleOrden" class="uk-form-stacked"  >
             <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
              <div class="uk-width-1-1">
               <div class="md-card">
                <div class="md-card-toolbar"><h2 class=" uk-text-large uk-text-middle uk-text-bold"><span id="numerodeordenpendiente"></span></h2> <!--AJAX PARA NUMERO DE ORDEN-->
                </div>
                <div class="md-card-content large-padding">
                 <div class="uk-grid "></div>
                 <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                  <div class="uk-width-large-1-3">
                   <h4 class="heading_c uk-margin-small-bottom">Información de Cliente </h4>
                    <div class="uk-form-row">
                     <ul class="md-list md-list-addon" id="datoscliente">
                      <li>
                       <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE7FD;</i></div>
                       <div class="md-list-content" >
                        <div class="md-list-heading"><span class="md-list-heading" id="ordenactual_nombrecliente"><!--AJAX PARA NOMBRE--></span>
                        </div><span class="uk-text-small uk-text-muted">Nombre Completo</span></div>
                      </li>
                      <li>
                       <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE158;</i></div>
                       <div class="md-list-content">
                        <div class="md-list-heading">
                        <span class="md-list-heading" id="ordenactual_emailcliente"><!--AJAX PARA EMAIL--></span>                         
                        </div><span class="uk-text-small uk-text-muted">Email</span></div>
                      </li>
                      <li>
                       <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE0CD;</i></div>
                       <div class="md-list-content">
                        <div class="md-list-heading">
                         <span class="md-list-heading" id="ordenactual_numtelcliente"><!--AJAX PARA TELEFONO--></span>                         
                         </div><span class="uk-text-small uk-text-muted">Telefóno</span></div>
                      </li>
                      <li>
                       <div class="md-list-content" >
                        <span class="md-color-red-A700 uk-text-bold" id="ordenactual_factura">
                        <!--AJAX PARA FACTURACION-->                         
                        </span>
                       </div>
                      </li>
                    </ul>
                    <ul  class="md-list md-list-addon" id="datosfactura">
                      <!--SI SE REQUIERE FACTURA SE MUESTRAN LOS DATOS RESTANTE CON AJAX PARA FACTURACION-->
                    </ul>
                  </div>
                </div>
                <div class="uk-width-large-1-3">
                 <h4 class="heading_c uk-margin-small-bottom">Datos de Pedido </h4>
                  <ul class="md-list md-list-addon">
                   <li>
                    <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE916;</i></div>
                    <div class="md-list-content">
                     <div class="md-list-heading">
                      <span class="md-list-heading" id="ordenactual_fchcompra">
                        <!--AJAX PARA FFCHCOMPRA-->
                      </span>
                     </div>
                     <span class="uk-text-small uk-text-muted">Fecha de Compra</span>
                    </div>
                   </li>
                   </ul><br>
                   <h5 class="heading_c uk-margin-small-bottom uk-h6">Producto(s)</h5>
                    <ul class="md-list md-list-addon" id="ordencompra_listaproductos">
                     <!--Lista de Productos por AJAX-->
                    </ul>
                   <h5 class="heading_c uk-margin-small-bottom uk-h6">Pago</h5>
                    <ul class="md-list md-list-addon">
                     <li>
                      <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE227;</i></div>
                      <div class="md-list-content">
                       <div class="md-list-heading" >
                        <span class="md-list-heading" id="ordenactual_totalcompra">
                          <!--AJAX PARA TOTAL DE COMPRA-->
                        </span>
                       </div>
                       <span class="uk-text-small uk-text-muted">Total de Compra</span>
                      </div>
                     </li>
                    </ul>
                   </div>
                   <div class="uk-width-large-1-3">
                    <h4 class="heading_c uk-margin-small-bottom">Datos de Envio </h4>
                     <div class="uk-form-row">
                      <ul class="md-list md-list-addon">
                       <li>
                        <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE614;</i></div>
                        <div class="md-list-content">
                         <div class="md-list-heading" >
                         <span class="md-list-heading" id="ordenactual_fchagendado">
                          <!--AJAX PARA LA FECHA DE ENTREGA-->
                         </span>
                         </div>
                         <span class="uk-text-small uk-text-muted">Fecha de Entrega</span>
                        </div>
                       </li>
                       <li>
                       <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE858;</i></div>
                       <div class="md-list-content">
                        <div class="md-list-heading">
                         <span class="md-list-heading" id="ordenactual_horaentrega">
                          <!--AJAX PARA LA HORA DE ENTREGA-->
                         </span>
                        </div>
                        <span class="uk-text-small uk-text-muted">Hora de Entrega</span>
                       </div>
                      </li>
                      <li>
                       <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE558;</i></div>
                       <div class="md-list-content">
                        <div class="md-list-heading">
                         <span class="md-list-heading" id="ordenactual_tipodeentrega">
                          <!--AJAX PARA LA TIPO DE SERVICIO DE ENTREGA-->
                         </span>
                        </div>
                        <span class="uk-text-small uk-text-muted">Tipo de Servicio</span>
                       </div>
                      </li>
                     </ul>
                     <ul class="md-list md-list-addon" id="datoscliente_envio"><!--AJAX PARA DIRECCION DE ENVIO--></ul>
                    </div>
                    <h4 class="heading_c uk-margin-small-bottom"><br/>Información de Quien Recibe </h4>
                    <div class="uk-form-row">
                     <ul class="md-list md-list-addon">
                      <li>
                       <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE87C;</i></div>
                       <div class="md-list-content">
                       <div class="md-list-heading">
                        <span class="md-list-heading" id="ordenactual_personarecibeentrega">
                          <!--AJAX DE QUIEN RECIBE-->
                         </span>                        
                       </div>
                       <span class="uk-text-small uk-text-muted">Nombre Completo</span>
                      </div>
                     </li>
                     <li>
                      <div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE0CF;</i></div>
                      <div class="md-list-content">
                       <div class="md-list-heading">
                        <span class="md-list-heading" id="ordenactual_telefonorecibeentrega">
                          <!--AJAX PARA LA TIPO DE SERVICIO DE ENTREGA-->
                        </span> 
                       </div>
                       <span class="uk-text-small uk-text-muted">Telefono</span>
                      </div>
                     </li>
                    </ul>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
             </form>
             <form class="uk-form-stacked" id="entregaEvidencia"></form>
            </div>
           </div>
        </div>
        <div id="marcarorden_add"><!--POP MARCAR ORDEN-->
          <div id="popup_marcarorden" class="uk-modal"><div class="uk-modal-dialog">
           <button type="button" class="uk-modal-close uk-close"></button>
            <div class="uk-modal-header">
             <h3 class="uk-modal-title"><i class="uk-icon-check-circle-o uk-icon-small"></i>&nbsp;Datos de Entrega</h3>
            </div>
            <form enctype="multipart/form-data" method="post" class="uk-form-horizontal" id="formevidenciaProductos" name="formevidenciaProductos">
             <div class="uk-form-row"><h4 class="heading_c uk-margin-small-bottom">Evidencias de Productos </h4>
              <ul class="md-list md-list-addon">
               <li>
                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                 <div class="uk-width-large-1-2">
                  <div class="md-list-content">
                   <div class="md-list-addon-element"><i class="material-icons">&#xE8D1;</i></div>
                    <div class="md-list-content">
                     <div class="md-list-heading">
                       <span class="md-list-heading" id="entrega_idorden"></span>
                     </div>
                     <span class="uk-text-small uk-text-muted">Número de Orden</span>
                    </div>
                  </div>
                </div>
                <div class="uk-width-large-1-2">
                 <div class="md-list-content">
                  <div class="md-list-heading">
                    <span class="md-list-heading" id="entrega_noproductpedido"></span>
                  </div>
                  <span class="uk-text-small uk-text-muted">No. Productos Pedidos</span>
                 </div>
                </div>
                </div>
               </li>
               <li>
                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                 <div class="uk-width-large-1-2">
                  <div class="md-list-content">
                   <div class="md-list-addon-element"><i class="material-icons">&#xE877;</i></div>
                   <div class="md-list-content" >
                    <div class="md-list-heading">
                      <span class="md-list-heading" id="entrega_fchentrega"></span>
                    </div>
                    <span class="uk-text-small uk-text-muted">Fecha como Entregado</span>
                   </div>
                  </div>
                 </div>
                 <div class="uk-width-large-1-2">
                  <div class="md-list-content" >
                   <div class="md-list-heading" id="diventrega_statusentrega">
                    <select name="entrega_statusentrega" id="entrega_statusentrega" class="md-input" onChange="pendienteDesc()">
                      <option value="" disabled selected hidden>Status de Pedido</option>
                      <option value="ENTREGADO">ENTREGADO</option> 
                      <option value="PENDIENTE">PENDIENTE</option>
                    </select> 
                  </div>
                 </div>
                </div>
               </li>
               <li>
                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                 <div class="uk-width-large-1-2">
                  <input type="file" name="img1Productv1" id="img1Productv1" class="dropify" data-show-loader="false"  />
                 </div>
                 <div class="uk-width-large-1-2">
                  <input type="file" name="img2Productv1" id="img2Productv1" value="" class="dropify" />   
                 </div>
                </div>  
               </li>
               <li id="li_descripcionPendiente">
                <textarea cols="30" rows="2" class="md-input autosize" style="margin-top: 0px; margin-bottom: 0px; height: 2px;" placeholder="Descripción del porque el status es pendiente" id="descripcionpendiente"></textarea>
                </li>
              </ul>
             </div>
            </form><br>
            <div id="entrega_complementariosform">
             <h4 class="heading_c uk-margin-small-bottom">Evidencias de Productos Complementarios</h4>
             <form enctype="multipart/form-data" method="post" class="uk-form-horizontal" id="formevidenciaComplem">
              <div class="uk-form-row">
               <ul class="md-list md-list-addon">
                <li>
                 <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                  <div class="uk-width-large-1-2">
                   <div class="md-list-content">
                    <div class="md-list-addon-element"><i class="material-icons">&#xE146;</i>
                    </div>
                    <div class="md-list-content" >
                     <div class="md-list-heading" id="diventrega_nocomplempedidos">
                      <span class="md-list-heading" id="entrega_nocomplempedidos"></span>
                     </div>
                     <span class="uk-text-small uk-text-muted">No. Productos Pedidos</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </li>
                <li>
                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                 <div class="uk-width-large-1-2">
                  <input type="file" name="img1Complemv1" id="img1Complemv1" class="dropify"/>
                 </div>
                 <div class="uk-width-large-1-2">
                  <input type="file" name="img2Complemv1" id="img2Complemv1" class="dropify"/>  
                 </div>
                </li>
               </ul>
              </div>
             </form>
            </div>
            <div class="uk-modal-footer"><!-- -->
             <button class="md-btn md-color-red-300 md-bg-grey-200 md-btn-block md-btn-wave-light waves-effect waves-button waves-light" type="button" onclick=marcarordenEntregada()>Enviar</button>
            </div>
           </div>
          </div>
          <!--MODIFICAR LA ORDEN DE ENTREGA -->  
          <div id="popupmodif_marcarorden" class="uk-modal"><div class="uk-modal-dialog">
           <button type="button" class="uk-modal-close uk-close"></button>
            <div class="uk-modal-header">
             <h3 class="uk-modal-title"><i class="uk-icon-check-circle-o uk-icon-small"></i>&nbsp;Datos de Entrega</h3>
            </div>
            <form enctype="multipart/form-data" method="post" class="uk-form-horizontal" id="formevidenciaProductos_modif" name="formevidenciaProductos_modif">
             <div class="uk-form-row"><h4 class="heading_c uk-margin-small-bottom">Evidencias de Productos </h4>
              <ul class="md-list md-list-addon">
               <li>
                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                 <div class="uk-width-large-1-2">
                  <div class="md-list-content">
                   <div class="md-list-addon-element"><i class="material-icons">&#xE8D1;</i></div>
                    <div class="md-list-content">
                     <div class="md-list-heading">
                       <span class="md-list-heading" id="entregamodif_idorden"></span>
                     </div>
                     <span class="uk-text-small uk-text-muted">Número de Orden</span>
                    </div>
                  </div>
                </div>
                <div class="uk-width-large-1-2">
                 <div class="md-list-content">
                  <div class="md-list-heading">
                    <span class="md-list-heading" id="entregamodif_noproductpedido"></span>
                  </div>
                  <span class="uk-text-small uk-text-muted">No. Productos Pedidos</span>
                 </div>
                </div>
                </div>
               </li>
               <li>
                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                 <div class="uk-width-large-1-2">
                  <div class="md-list-content">
                   <div class="md-list-addon-element"><i class="material-icons">&#xE877;</i></div>
                   <div class="md-list-content" >
                    <div class="md-list-heading">
                      <span class="md-list-heading" id="entregamodif_fchentrega"></span>
                    </div>
                    <span class="uk-text-small uk-text-muted">Fecha Modificacion</span>
                   </div>
                  </div>
                 </div>
                 <div class="uk-width-large-1-2">
                  <div class="md-list-content" >
                   <div class="md-list-heading">
                    <select name="entregamodif_statusentrega" id="entregamodif_statusentrega" class="md-input">
                      <option value="" disabled selected hidden>Status de Pedido</option>
                      <option value="ENTREGADO">ENTREGADO</option> 
                      <option value="PENDIENTE">PENDIENTE</option>
                    </select> 
                  </div>
                 </div>
                </div>
               </li>
               <li>
                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                 <div class="uk-width-large-1-2">
                  <input type="file" name="img1Productv2" id="img1Productv2"  value="" class="dropify" />
                 </div>
                 <div class="uk-width-large-1-2">
                  <input type="file" name="img2Productv2" id="img2Productv2" value="" class="dropify" />   
                 </div>
                </div>  
               </li>
              </ul>
             </div>
            </form><br>
            <div id="entregamodif_complementariosform">
             <h4 class="heading_c uk-margin-small-bottom">Evidencias de Productos Complementarios</h4>
             <form enctype="multipart/form-data" method="post" class="uk-form-horizontal" name="formevidenciaComplem_modif" id="formevidenciaComplem_modif">
              <div class="uk-form-row">
               <ul class="md-list md-list-addon">
                <li>
                 <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                  <div class="uk-width-large-1-2">
                   <div class="md-list-content">
                    <div class="md-list-addon-element"><i class="material-icons">&#xE146;</i>
                    </div>
                    <div class="md-list-content" >
                     <div class="md-list-heading">
                      <span class="md-list-heading" id="entregamodif_nocomplempedidos"></span>
                     </div>
                     <span class="uk-text-small uk-text-muted">No. Productos Pedidos</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </li>
                <li>
                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                 <div class="uk-width-large-1-2">
                  <input type="file" name="img1Complemv2" id="img1Complemv2" class="dropify"/>
                 </div>
                 <div class="uk-width-large-1-2">
                  <input type="file" name="img2Complemv2" id="img2Complemv2" class="dropify"/>  
                 </div>
                </li>
               </ul>
              </div>
             </form>
            </div>
            <div class="uk-modal-footer"><!-- -->
             <button class="md-btn md-color-red-300 md-bg-grey-200 md-btn-block md-btn-wave-light waves-effect waves-button waves-light" type="button" onclick="marcarordenEntregadaModif()"> Modificar </button>
            </div>
           </div>
          </div>
         </div>
        </div><!-- end Contenido de Pesta? Ordenes -->

        <!--COMIENZA MIGUEL HTML -->
        <div id="contenido_Productos"><!-- Contenido de Pesta? Productos -->
          <!-- Contenido de Iitem de Producto en Linea -->
            <div id="productoslinea">
              <h3 class="heading_b uk-margin-bottom"> Productos en Línea </h3>
              <div id="productoslineaPlantilla" class="uk-grid uk-grid-medium uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
              </div>
              <!--/////////////////////////////////// -->
              <!--/////////////////////////////////// -->
              <!-- PopUp para eliminar de producto JS -->
              <div class="uk-width-medium-1-3" >
                <div class="uk-modal" id="popup_productEliminar" >
                  <div class="uk-modal-dialog">
                    <div class="uk-modal-header">
                      <h3 class="uk-modal-title" id="nombreEliminarH3">Usuario <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="headline tooltip">&#xE8FD;</i></h3>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                      <div class="uk-width-medium-1-3">
                      </div>
                      <div class="uk-width-medium-1-3">
                      </div>                                      
                    </div>
                    <div class="uk-modal-footer uk-text-right">
                      <button type="button" class="md-btn md-btn-flat uk-modal-close">Cerrar</button><button data-uk-modal="{target:'#modal_new'}" type="button" class="md-btn md-btn-flat md-btn-flat-primary">Eliminar</button>
                    </div>
                  </div>
                </div>
                <div class="uk-modal" id="modal_new">
                  <div class="uk-modal-dialog">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <p class="uk-text-bold">Elimnacion Exitosa.</p>
                  </div>
                </div>
              </div>
              <!-- end PopUp para agregar un nuevo Producto Líea -->
              <!--uk-modal-dialog-blank uk-modal-dialog-large-->
              <div class="uk-modal" id="popup_nuevoproductolinea">
                <div class="uk-modal-dialog uk-modal-dialog-large">
                  <button type="button" class="uk-modal-close uk-close"></button>
                  <div class="uk-modal-header">
                    <h3 class="uk-modal-title"><i class="material-icons" data-uk-tooltip="{pos:'top'}">&#xE148;</i>&nbsp;&nbsp;Nuevo Producto en Líea</h3>
                  </div>
                  <div class="md-card">
                    <div class="md-card-content">
                      <form action="#" class="uk-form-stacked" id="altaproducto" name="altaproducto" novalidate>
                        <div class="md-card-content large-padding">
                          <div class="uk-grid uk-grid-divider uk-grid-collapse form_section form_section_separator" data-uk-grid-margin>
                            
                            <div class="uk-width-large-3-10">
                              <h4 class="heading_c uk-margin-small-bottom">1 Datos Generales </h4>
                              <ul class="md-list">
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <div class="parsley-row">
                                      <div class="md-input-wrapper">
                                        <label> Nombre del Producto <span class="req"> * </span> </label> <br/>
                                        <input type="text" name="alta_nombre_producto_linea" id="alta_nombre_producto_linea" required class="md-input" />
                                      </div>
                                      </div>
                                    </div> 
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label for="wizard_address"> Descripción <span class="req"> * </span> </label> <br/>
                                      <textarea class="md-input" name="alta_descripcion_producto_linea" id="alta_descripcion_producto_linea" cols="30" rows="1"> </textarea>
                                    </div>                                    
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                     <div id="ingredientesCheck" class="uk-width-large-1-1">
                                      <h5 class="heading_c uk-margin-small-bottom">Ingredientes Importantes <span class="req"> * </span> </h5>
                                      <textarea class="md-input" name="alta_ingredientes_producto_linea" id="alta_ingredientes_producto_linea" cols="30" rows="1"></textarea>
                                     </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-1">
                                      <div class="uk-float-right">
                                        <input type="checkbox" data-switchery checked name="alta_activado_producto_linea" id="alta_activado_producto_linea" />
                                      </div>
                                      <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Activado</label>
                                    </div>
                                    <div class="uk-width-medium-1-1 ">
                                      <label for="wizard_birth">SEO <span class="req"> * </span></label>
                                      <input type="text" name="alta_seo_producto_linea" id="alta_seo_producto_linea"  class="md-input" />
                                    </div>                                    
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-medium-1-1">
                                      <h5 class="heading_c uk-margin-small-bottom">Tipo de producto </h5>
                                    </div>
                                    <div class="uk-width-medium-1-1 ">
                                      <div class="uk-input-group">
                                        <span class="uk-input-group-addon"> <i class="uk-icon-chevron-circle-right"> </i> </span>
                                        <div class="parsley-row">
                                          <h5 class="heading_c uk-margin-small-bottom">Categória <span class="req"> * </span></h5>
                                          <select id="alta_categoria_producto_linea" name="alta_categoria_producto_linea" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                            <option value="" disabled selected hidden></option>
                                          </select>
                                        </div>
                                      </div>        
                                    </div>
                                    <div class="uk-width-medium-1-1 ">
                                      <br/>
                                      <br/>
                                    </div>
                                    <div class="uk-width-medium-1-1 ">
                                      <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-icon-chevron-circle-right"></i></span>
                                        <div class="parsley-row">
                                          <h5 class="heading_c uk-margin-small-bottom">Clasificacíon <span class="req"> * </span></h5>
                                          <select id="alta_clasificacion_producto_linea" name="alta_clasificacion_producto_linea" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                            <option value=""></option>
                                            <option value="" selected></option>
                                          </select>
                                        </div>
                                      </div>  
                                    </div>
                                  </div>
                                  
                                </li>                                
                              </ul>
                            </div>
                            <div class="uk-width-large-4-10">
                              <h4 class="heading_c uk-margin-small-bottom">2 Fotografias </h4>
                              <ul class="md-list">
                                <li>
                                  <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-1">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5 id="alta_srcimg1_producto_linea_titulo">
                                              Fotografía 1  <span class="req"> * </span>
                                          </h5>
                                          <input type="file" id="alta_srcimg1_producto_linea" name="srcimg1_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="alta_srcimg1_producto_lineaBD" name="srcimg1_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="uk-width-medium-1-1">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5 id="alta_srcimg2_producto_linea_titulo">
                                              Fotografía 2 <span class="req"> * </span>
                                          </h5>                                          
                                          <input type="file" id="alta_srcimg2_producto_linea" name="srcimg2_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="alta_srcimg2_producto_lineaBD" name="srcimg2_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="uk-width-medium-1-1">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5 id="alta_srcimg3_producto_linea_titulo">
                                              Fotografía 3 <span class="req"> * </span>
                                          </h5>                                          
                                          <input type="file" id="alta_srcimg3_producto_linea" name="srcimg3_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="alta_srcimg3_producto_lineaBD" name="srcimg3_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                              </ul>
                            </div>

                            <div class="uk-width-large-3-10">
                              <h4 class="heading_c uk-margin-small-bottom">3 Detalles</h4>
                              <div class="uk-grid form_section" id="productdetalle">
                                <div class="uk-width-1-1">
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-2">                        
                                    </div>
                                    <div class="uk-width-large-1-2">
                                    </div>
                                  </div>
                                  <ul class="md-list">
                                    <li>
                                      <div class="uk-grid ">
                                        <div class="uk-width-large-1-1">
                                          <div class="uk-input-group">
                                            <span class="uk-input-group-addon"><i class="uk-icon-chevron-circle-right"></i></span>
                                            <div class="parsley-row">
                                              <h5 class="heading_c uk-margin-small-bottom"> Caract. Especifica</h5>
                                              <select id="alta_especificingredientes_producto_linea" name="alta_especificingredientes_producto_linea" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                                <option value="" disabled selected hidden></option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <br/>
                                    </li>
                                    <li>
                                      <div class="uk-grid">
                                        <div class="uk-width-medium-1-1">
                                          <h5 class="heading_c uk-margin-bottom" id="alta_forma_producto_linea_titulo">Forma del producto (elegir solo uno)</h5>
                                          <ul id="forma_producto" class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#switcher-content-a-fade', animation: 'fade'}">
                                            <li class="uk-active"> <a href="#"> Cuadrado </a> </li>
                                            <li> <a href="#"> Circular </a> </li>
                                            <li> <a href="#"> Piezas </a> </li>
                                          </ul>
                                          <ul id="switcher-content-a-fade" class="uk-switcher uk-margin">
                                            <li>
                                              <div class="uk-width-1-1"> 
                                                <label>&nbsp;Largo(cm) <span class="req"> * </span> </label>
                                                <br/>
                                                <input type="number" min="0" name="alta_clasifcateg_cuadrado_largo_producto_linea" id="alta_clasifcategproduct_cuadrado_largo_producto_linea" class="md-input" />
                                              </div>
                                              <div class="uk-width-1-1"> 
                                                <label> &nbsp;Ancho(cm) <span class="req"> * </span> </label>
                                                <br/>
                                                <input type="number" min="0" name="alta_clasifcateg_cuadrado_ancho_producto_linea" id="alta_clasifcategproduct_cuadrado_ancho_producto_linea" class="md-input" />
                                              </div>
                                            </li>
                                            <li>
                                              <div class="uk-width-1-1">
                                                <label> &nbsp;Diámetro(cm) <span class="req"> * </span> </label>
                                                <br/>
                                                <input type="number" min="0" name="alta_clasifcateg_circular_diametro_producto_linea" id="alta_clasifcategproduct_circular_diametro_producto_linea" class="md-input" />
                                              </div>
                                            </li>
                                            <li>
                                              <div class="uk-width-1-1">
                                                <label> &nbsp;Número de piezas <span class="req"> * </span> </label>
                                                <br/>
                                                <input type="number" min="0" name="alta_clasifcateg_piezas_producto_linea" id="alta_clasifcategproduct_piezas_producto_linea" class="md-input" />
                                              </div>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <br/>
                                    </li>
                                    <li>
                                      <div class="uk-grid">
                                         <div class="uk-width-large-1-1">
                                          <h5 class="heading_c uk-margin-small-bottom">Otros Detalles</h5>
                                        </div>
                                        <div class="uk-width-large-1-1"><br/>
                                          <label class="uk-h6"><i class="uk-icon-calendar "></i>&nbsp;Dias en Elaborar <span class="req"> * </span></label>
                                          <input type="number" class="md-input" min="0" name="alta_detalle_diasElborar_producto_linea" id="alta_detalle_diasElborar_producto_linea"  />
                                        </div>
                                        <div class="uk-width-large-1-1"><br/>
                                          <label class="uk-h6"><i class="uk-icon-usd"></i>&nbsp;Precio <span class="req"> * </span></label>
                                          <input type="number" class="md-input" min="0" name="alta_detalle_precioreal_producto_linea" id="alta_detalle_precioreal_producto_linea" />
                                        </div>
                                        <div class="uk-width-large-1-1"><br/>
                                          <label class="uk-h6"><i class="uk-icon-cubes"></i>&nbsp;Stock <span class="req"> * </span></label>
                                          <input type="number" class="md-input" min="0" name="alta_detalle_stock_producto_linea" id="alta_detalle_stock_producto_linea" />
                                        </div>
                                      </div>
                                      <br/>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> 
                      </form>
                    </div>
                  </div>
                  <div class="uk-modal-footer uk-text-right">
                    <button type="submit" class="md-btn md-btn-flat md-btn-flat-primary" onclick="UIkit.modal.confirm('Guardar y Registrar?', function(){ validarFormulario('form_alta_productos_linea');  });">Agregar Producto </button> 
                  </div>
                </div>  
              </div>
              <!--/////////////////////////////////// -->
              <!--/////////////////////////////////// -->              
              <!-- PopUp para modificaci? de Datos Especificos de un Producto -->
              <div class="uk-modal" id="popup_modificarproductolinea">
                <div class="uk-modal-dialog ">
                  <button type="button" class="uk-modal-close uk-close">                    
                  </button>
                  <div class="uk-modal-header">
                    <h3 class="uk-modal-title">
                      <i class="material-icons" data-uk-tooltip="{pos:'top'}">
                        &#xE254;
                      </i>
                      &nbsp;&nbsp;Detalles Especificos de Producto
                    </h3>
                  </div>
                  <!--<form action="" class="uk-form-large" id="product_edit_form">-->
                  <form action="" class="uk-form-large" id="formActualizarProductoLinea">
                    <div class="uk-grid uk-grid-medium" data-uk-grid-margin >
                      <div class="uk-width">
                        <div class="md-card">
                          <div class="md-card-content large-padding">
                            <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                              <div class="uk-width">
                                <div class="uk-form-row">
                                  <label for="product_edit_name_control">                                    
                                  </label>
                                  <input type="text" name="modificar_nombre_producto_linea" id="modificar_nombre_producto_linea" class="md-input" readonly />
                                  <input type="hidden" name="modificar_id_producto_linea" id="modificar_id_producto_linea" class="md-input" readonly />
                                  <input type="hidden" name="modificar_id_productoDetalle_linea" id="modificar_id_productoDetalle_linea" class="md-input" readonly />
                                  <div class="uk-float-right" id="div_checkbox_modificar_activado_producto_linea" name="div_checkbox_modificar_activado_producto_linea">
                                    <input type="checkbox" name="modificar_activado_producto_linea" id="modificar_activado_producto_linea" />
                                  </div>
                                  <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">
                                    Activo
                                  </label>                                  
                                  <br/>
                                  <label for="product_edit_memory_control" class="uk-form-label">
                                    Caract. Especifica
                                    <span class="req"> * </span>
                                  </label>
                                  <select id="modificar_especificingredientes_producto_linea" name="modificar_especificingredientes_producto_linea" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                    <option value="" disabled selected hidden></option>
                                  </select>
                                </div>
                                <div class="uk-form-row">
                                  <div class="uk-input-group">
                                    <span class="uk-input-group-addon">
                                      <i class="uk-icon-calendar"></i>
                                    </span>
                                    <label for="product_edit_quantity_control">                                      
                                      Días de Elaboración
                                      <span class="req"> * </span>                                 
                                    </label>
                                    <br/>
                                    <input type="number" min="0" class="md-input" name="modificar_detalle_diasElborar_producto_linea" id="modificar_detalle_diasElborar_producto_linea"  />
                                  </div>
                                </div>
                                <div class="uk-form-row">
                                  <div class="uk-input-group">
                                    <span class="uk-input-group-addon">                                      
                                      <i class="uk-icon-usd"></i>
                                    </span>
                                    <label for="product_edit_quantity_control">
                                      Precio
                                      <span class="req"> * </span>
                                    </label>
                                    <br/>
                                    <input type="number" min="0" class="md-input" name="modificar_detalle_precio_producto_linea" id="modificar_detalle_precio_producto_linea"  />
                                  </div>
                                </div>
                                <div class="uk-form-row">
                                  <div class="uk-input-group">
                                    <span class="uk-input-group-addon">
                                      <i class="uk-icon-cubes ">                                        
                                      </i>
                                    </span>
                                    <label for="product_edit_quantity_control">
                                      Stock &nbsp;&nbsp;
                                      <span class="req"> * </span>
                                    </label>
                                    <br/>
                                    <input type="number" min="0" class="md-input" name="modificar_detalle_stock_producto_linea" id="modificar_detalle_stock_producto_linea" />
                                    <br/>
                                    <br/>
                                          <h5 class="heading_c uk-margin-bottom" id="modificar_forma_producto_linea_titulo">Forma del producto (elegir solo uno)<span class="req"> * </span></h5>

                                          <ul id="modificar_forma_producto" class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#modificar_switcher-content-a-fade', animation: 'fade'}">
                                            <li id="modificar_tab_cuadrado" class="uk-active"> <a href="#"> Cuadrado </a> </li>
                                            <li id="modificar_tab_circulo"> <a href="#"> Circular </a> </li>
                                            <li id="modificar_tab_piezas"> <a href="#"> Piezas </a> </li>
                                          </ul>
                                          <ul id="modificar_switcher-content-a-fade" class="uk-switcher uk-margin">
                                            <li>
                                              <div class="uk-width-1-1"> 
                                                <label>&nbsp;Largo(cm) <span class="req"> * </span> </label>
                                                <br/>
                                                <input type="number" min="0" name="modificar_clasifcategproduct_cuadrado_largo_producto_linea" id="modificar_clasifcategproduct_cuadrado_largo_producto_linea" class="md-input" />
                                              </div>
                                              <div class="uk-width-1-1"> 
                                                <label> &nbsp;Ancho(cm) <span class="req"> * </span> </label>
                                                <br/>
                                                <input type="number" min="0" name="modificar_clasifcategproduct_cuadrado_ancho_producto_linea" id="modificar_clasifcategproduct_cuadrado_ancho_producto_linea" class="md-input" />
                                              </div>
                                            </li>
                                            <li>
                                              <div class="uk-width-1-1">
                                                <label> &nbsp;Diámetro(cm) <span class="req"> * </span> </label>
                                                <br/>
                                                <input type="number" min="0" name="modificar_clasifcategproduct_circular_diametro_producto_linea" id="modificar_clasifcategproduct_circular_diametro_producto_linea" class="md-input" />
                                              </div>
                                            </li>
                                            <li>
                                              <div class="uk-width-1-1">
                                                <label> &nbsp;Número de piezas <span class="req"> * </span> </label>
                                                <br/>
                                                <input type="number" min="0" name="modificar_clasifcategproduct_piezas_producto_linea" id="modificar_clasifcategproduct_piezas_producto_linea" class="md-input" />
                                              </div>
                                            </li>
                                          </ul>
                                      <br/>
                                  </div>
                                </div>
                              </div>                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="uk-modal-footer uk-text-right">
                    <!-- Boton  para abrir el PopUp de modificaci? de Datos Generales de un Producto -->
                    <button type="button" class="md-btn md-btn-flat md-btn-small" data-uk-modal="{target:'#popup_modificarproductolineageneral'}">
                      Modif. Datos General
                    </button>
                    <!-- Boton para aceptar la actualizar de las modificaciones de Datos especificos de un Producto -->
                    <!--<button type="submit" class="md-btn md-btn-flat md-btn-flat-primary" onclick="UIkit.modal.confirm('Guardar y Registrar?', function(){ validarFormulario('form_alta_productos_linea');  });">Agregar Producto </button> -->
                    <button type="submit" class="md-btn md-btn-flat md-btn-small md-btn-flat-primary" onclick="UIkit.modal.confirm('Guardar los cambios?',  function(){ validarFormulario('form_modificar_productos_linea_detalle'); });">
                      Actualizar
                    </button>
                  </div>
                </div>   
              </div>
              <!--</div>-->
              <!--end PopUp de datos especificos-->              
              <!-- PopUp para modificaci? de Datos generales de un Producto -->
              <!--<div class="uk-modal" id="popup_productgeneral">-->
              <div class="uk-modal" id="popup_modificarproductolineageneral">
                <div class="uk-modal-dialog uk-modal-dialog-large">
                  <button type="button" class="uk-modal-close uk-close">                  
                  </button>
                  <div class="uk-modal-header">
                    <h3 class="uk-modal-title">
                      <i class="material-icons" data-uk-tooltip="{pos:'top'}">
                        &#xE254;
                      </i>
                      &nbsp;&nbsp;Detalles Generales de Producto
                    </h3>
                  </div>
                  <form id="formActualizarProductoLineaGeneral" name="formActualizarProductoLineaGeneral" action="" class="uk-form-stacked">
                    <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                      <div class="uk-width-large-4-10">
                        <div class="md-card">
                          <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">Datos</h3>
                          </div>
                          <div class="md-card-content large-padding">
                            <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                              <div class="uk-width-large-1-1">
                                <div class="uk-form-row">
                                  <label for="product_edit_name_control">Nombre de Producto<span class="req"> * </span></label>
                                  <input type="text" class="md-input" id="modificar_nombre_producto_linea_general" name="modificar_nombre_producto_linea_general" value="Nombre Producto "/>
                                </div>
                                <div class="uk-form-row">
                                  <label for="product_edit_manufacturer_control">SEO<span class="req"> * </span></label>
                                  <input type="text" class="md-input" id="modificar_seo_producto_linea_general" name="modificar_seo_producto_linea_general" value="pastelsecodechocolate"/>
                                </div>
                                <div class="uk-form-row">
                                  <label for="product_edit_memory_control" class="uk-form-label">
                                    Categoria del Producto<span class="req"> * </span>
                                  </label>
                                  <select id="modificar_categoria_producto_linea_general" name="modificar_categoria_producto_linea_general" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                    <option value="" disabled selected hidden></option>
                                  </select>
                                </div>
                                <div class="uk-form-row">
                                  <label for="product_edit_memory_control" class="uk-form-label">
                                    Clasificación<span class="req"> * </span>
                                  </label>
                                  <select id="modificar_clasificacion_producto_linea_general" name="modificar_clasificacion_producto_linea_general" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                    <option value="" disabled selected hidden></option>
                                  </select>
                                </div>
                                <div class="uk-form-row">
                                  <label for="product_edit_manufacturer_control">Activo</label>
                                  <div class="uk-float-right">
                                    <input type="checkbox" name="modificar_activado_producto_linea_general" id="modificar_activado_producto_linea_general" />
                                  </div>
                                </div>
                              </div>
                              <div class="uk-width-large-1-1">
                                <div class="uk-form-row">
                                  <label for="product_edit_description_control">Descripción<span class="req"> * </span></label><br/>
                                  <textarea class="md-input" name="modificar_descripcion_producto_linea_general" id="modificar_descripcion_producto_linea_general" cols="10" rows="1"></textarea>
                                  <br/>
                                  <label for="product_edit_description_control">Ingredientes<span class="req"> * </span></label><br/>
                                  
                                  <textarea class="md-input" name="modificar_ingredientes_producto_linea_general" id="modificar_ingredientes_producto_linea_general" cols="10" rows="1"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="uk-width-large-6-10">
                        <input type="hidden" id="modificar_id_producto_linea_general" name="modificar_id_producto_linea_general"> 
                        <!--uk-margin-large-bottom-->
                        <div class="md-card ">
                          <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">Fotografías</h3>
                          </div>
                          <div class="md-card-content" >
                            <!--<h3 class="heading_a uk-margin-bottom"></h3>-->
                            <h4>Fotografías actuales del producto</h4>
                            <div  id="modificar_galeria_producto_linea_general" class="uk-grid" data-uk-grid-margin>
                            </div>
                          </div>      
                          <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-3">
                              <div class="md-card">
                                <div class="md-card-content">
                                  <h5>
                                      Fotografía 1
                                  </h5>
                                  <input type="file" id="modificar_srcimg1_producto_linea" name="srcimg1_producto" class="dropify" data-max-file-size="2000K"/>
                                  <input type="hidden" id="modificar_srcimg1_producto_lineaBD" name="srcimg1_productoBD" />
                                </div>
                              </div>
                            </div>
                            <div class="uk-width-medium-1-3">
                              <div class="md-card">
                                <div class="md-card-content">
                                  <h5>
                                      Fotografía 2
                                  </h5>
                                  <input type="file" id="modificar_srcimg2_producto_linea" name="srcimg2_producto" class="dropify" data-max-file-size="2000K" />
                                  <input type="hidden" id="modificar_srcimg2_producto_lineaBD" name="srcimg2_productoBD" />
                                </div>
                              </div>
                            </div>
                            <div class="uk-width-medium-1-3">
                              <div class="md-card">
                                <div class="md-card-content">
                                  <h5>
                                      Fotografía 3
                                  </h5>
                                  <input type="file" id="modificar_srcimg3_producto_linea" name="srcimg3_producto" class="dropify" data-max-file-size="2000K" />
                                  <input type="hidden" id="modificar_srcimg3_producto_lineaBD" name="srcimg3_productoBD" />
                                </div>
                              </div>
                            </div>
                          </div>                          
                        </div>
                        
                      </div>                      
                    </div>
                    <div class="uk-modal-footer uk-text-right">
                        <!-- Boton para eliminar un Producto en su totalidad-->
                      <button type="button" class="md-btn md-btn-flat" onclick="UIkit.modal.confirm('?Elimianr el Producto?', function(){ UIkit.modal.alert('Eliminado!'); });">Eliminar</button>
                      <!-- Boton para actualizar las modificaciones de Datos Generales de un Producto -->
                      <button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="UIkit.modal.confirm('Guardar los cambios?', function(){ validarFormulario('form_modificar_productos_linea_general') });">Actualizar </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- PopUp para modificaci? de Datos generales de un Producto -->
            </div><!-- end Contenido de Item de Producto en Linea -->
            <!--CONTE -->
            <!--Linea divisora-->
            <div>
              <hr>
            </div>
            <div id="productoscotizador">
              <h3 class="heading_b uk-margin-bottom"> Productos en Cotizador </h3>
              <div id="productoscotizadorPlantilla" class="uk-grid uk-grid-medium uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
              </div>
              <!--/////////////////////////////////// -->
              <!--/////////////////////////////////// -->
              <!-- PopUp para eliminar de producto JS -->
              <div class="uk-width-medium-1-3" >
                <div class="uk-modal" id="popup_productEliminar_cotizador" >
                  <div class="uk-modal-dialog">
                    <div class="uk-modal-header">
                      <h3 class="uk-modal-title" id="nombreEliminarH3">Usuario <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="headline tooltip">&#xE8FD;</i></h3>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                      <div class="uk-width-medium-1-3">
                      </div>
                      <div class="uk-width-medium-1-3">
                      </div>                                      
                    </div>
                    <div class="uk-modal-footer uk-text-right">
                      <button type="button" class="md-btn md-btn-flat uk-modal-close">Cerrar</button><button data-uk-modal="{target:'#modal_new'}" type="button" class="md-btn md-btn-flat md-btn-flat-primary">Eliminar</button>
                    </div>
                  </div>
                </div>
                <div class="uk-modal" id="modal_new">
                  <div class="uk-modal-dialog">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <p class="uk-text-bold">Elimnacion Exitosa.</p>
                  </div>
                </div>
              </div>            
              <div class="uk-modal" id="popup_nuevoproductocotizador">
                <div class="uk-modal-dialog uk-modal-dialog-large">
                  <button type="button" class="uk-modal-close uk-close"></button>
                  <div class="uk-modal-header">
                    <h3 class="uk-modal-title"><i class="material-icons" data-uk-tooltip="{pos:'top'}">&#xE148;</i>&nbsp;&nbsp;Nuevo Producto en Cotizador</h3>
                  </div>
                  <div class="md-card">
                    <div class="md-card-content">
                      <form action="" class="uk-form-stacked" id="altaproductocotizador" name="altaproductocotizador">
                        <div class="md-card-content large-padding">
                          <div class="uk-grid uk-grid-divider uk-grid-medium form_section form_section_separator" data-uk-grid-margin>
                            <div class="uk-width-large-4-10">
                              <h4 class="heading_c uk-margin-small-bottom">Datos Generales </h4>
                              <ul class="md-list">
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label> Nombre del Producto <span class="req"> * </span> </label> <br/>
                                      <input type="text" name="alta_nombre_producto_cotizador" id="alta_nombre_producto_cotizador" class="md-input" />
                                    </div> 
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label for="wizard_address"> Descripción <span class="req"> * </span> </label> <br/>
                                      <textarea class="md-input" name="alta_descripcion_producto_cotizador" id="alta_descripcion_producto_cotizador" cols="30" rows="1"> </textarea>
                                    </div>                                    
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                     <div id="ingredientesCheck" class="uk-width-large-1-1">
                                      <h5 class="heading_c uk-margin-small-bottom">Ingredientes Importantes <span class="req"> * </span> </h5>
                                      <textarea class="md-input" name="alta_ingredientes_producto_cotizador" id="alta_ingredientes_producto_cotizador" cols="30" rows="1"></textarea>
                                     </div>
                                  </div>
                                  <br/>
                                </li>

                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-1">
                                    </div>
                                    <div class="uk-width-large-1-1"><br/>
                                      <label class="uk-h6"><i class="uk-icon-calendar "></i>&nbsp;Dias en Elaborar <span class="req"> * </span></label>
                                      <input type="number" min="0" class="md-input" name="alta_detalle_diasElborar_producto_cotizador" id="alta_detalle_diasElborar_producto_cotizador"  />
                                    </div>
                                  </div>
                                  <br/>
                                </li>                                
                              </ul>
                            </div>

                          <!--</div>-->
                            <div class="uk-width-large-6-10">                              
                              <ul class="md-list">
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-1">
                                      <div class="uk-float-right">
                                        <input type="checkbox" data-switchery checked name="alta_activado_producto_cotizador" id="alta_activado_producto_cotizador" />
                                      </div>
                                      <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Activado</label>
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-medium-1-1">
                                      <h5 class="heading_c uk-margin-small-bottom">Tipo de evento <span class="req"> * </span></h5>
                                    </div>
                                    <div class="uk-width-medium-1-1 ">
                                      <div class="uk-input-group">
                                        <span class="uk-input-group-addon"> <i class="uk-icon-chevron-circle-right"> </i> </span>
                                        <div class="parsley-row">
                                          <h5 class="heading_c uk-margin-small-bottom">Evento</h5>
                                          <select id="alta_evento_producto_cotizador" name="alta_evento_producto_cotizador" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                            <option value="" disabled selected hidden></option>
                                          </select>
                                        </div>
                                      </div>        
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                
                                <li>
                                  <h4 class="heading_c uk-margin-small-bottom">Fotografías <span class="req"> * </span> </h4>
                                  <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-3">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5 id="alta_srcimg1_producto_cotizador_titulo">
                                              Fotografía 1
                                          </h5>
                                          <input type="file" id="alta_srcimg1_producto_cotizador" name="srcimg1_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="alta_srcimg1_producto_cotizadorBD" name="srcimg1_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="uk-width-medium-1-3">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5 id="alta_srcimg2_producto_cotizador_titulo">
                                              Fotografía 2
                                          </h5>
                                          <input type="file" id="alta_srcimg2_producto_cotizador" name="srcimg2_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="alta_srcimg2_producto_cotizadorBD" name="srcimg2_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="uk-width-medium-1-3">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5 id="alta_srcimg3_producto_cotizador_titulo">
                                              Fotografía 3
                                          </h5>
                                          <input type="file" id="alta_srcimg3_producto_cotizador" name="srcimg3_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="alta_srcimg3_producto_cotizadorBD" name="srcimg3_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div> 
                      </form>
                    </div>
                  </div>
                  <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="UIkit.modal.confirm('Guardar y Registrar?', function(){ validarFormulario('form_alta_productos_cotizador') });">Agregar Producto </button> 
                  </div>
                </div>  
              </div>              
              <!--/////////////////////////////////// -->
              <!--/////////////////////////////////// -->              
              <!-- PopUp para modificaci? de Datos Especificos de un Producto -->
              <div class="uk-modal" id="popup_modificarproductocotizador">
                <div class="uk-modal-dialog uk-modal-dialog-large">
                  <button type="button" class="uk-modal-close uk-close"></button>
                  <div class="uk-modal-header">
                    <h3 class="uk-modal-title"><i class="material-icons" data-uk-tooltip="{pos:'top'}">&#xE148;</i>&nbsp;&nbsp;Modificar Producto en Cotizador</h3>
                  </div>
                  <div class="md-card">
                    <div class="md-card-content">
                      <form action="" class="uk-form-stacked" id="formActualizarProductoCotizador" name="formActualizarProductoCotizador">
                        <div class="md-card-content large-padding">
                          <div class="uk-grid uk-grid-divider uk-grid-medium form_section form_section_separator" data-uk-grid-margin>
                            <div class="uk-width-medium-4-10">
                              <h4 class="heading_c uk-margin-small-bottom">Datos Generales </h4>
                              <input type="hidden" name="modificar_id_producto_cotizador" id="modificar_id_producto_cotizador" class="md-input" />
                              <input type="hidden" name="modificar_idProveedor_producto_cotizador" id="modificar_idProveedor_producto_cotizador" class="md-input" />
                              <ul class="md-list">
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label> Nombre del Producto <span class="req"> * </span> </label> <br/>
                                      <input type="text" name="modificar_nombre_producto_cotizador" id="modificar_nombre_producto_cotizador" class="md-input" />
                                    </div> 
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label for="wizard_address"> Descripción <span class="req"> * </span> </label> <br/>
                                      <textarea class="md-input" name="modificar_descripcion_producto_cotizador" id="modificar_descripcion_producto_cotizador" cols="30" rows="1"> </textarea>
                                    </div>                                    
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                     <div id="ingredientesCheck" class="uk-width-large-1-1">
                                      <h5 class="heading_c uk-margin-small-bottom">Ingredientes Importantes </h5>
                                      <textarea class="md-input" name="modificar_ingredientes_producto_cotizador" id="modificar_ingredientes_producto_cotizador" cols="30" rows="1"></textarea>
                                     </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-1"><br/>
                                      <label class="uk-h6"><i class="uk-icon-calendar "></i>&nbsp;Dias en Elaborar</label>
                                      <br/>
                                      <input type="number" min="0" class="md-input" name="modificar_detalle_diasElborar_producto_cotizador" id="modificar_detalle_diasElborar_producto_cotizador"  />
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-medium-1-1">
                                      <h5 class="heading_c uk-margin-small-bottom">Tipo de evento</h5>
                                    </div>
                                    <div class="uk-width-medium-1-1 ">
                                      <div class="uk-input-group">
                                        <span class="uk-input-group-addon"> <i class="uk-icon-chevron-circle-right"> </i> </span>
                                        <div class="parsley-row">
                                          <h5 class="heading_c uk-margin-small-bottom">Evento</h5>
                                          <select id="modificar_evento_producto_cotizador" name="modificar_evento_producto_cotizador" class="md-input" data-uk-tooltip="{pos:'top'}" title="Select with tooltip">
                                            <option value="" disabled selected hidden></option>
                                          </select>
                                        </div>
                                      </div>        
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                
                                
                              </ul>
                            </div>
                            <div class="uk-width-medium-6-10">                                                      
                              <ul class="md-list">                                    
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-1">
                                      <div class="uk-float-right">
                                        <input type="checkbox" data-switchery checked name="modificar_activado_producto_cotizador" id="modificar_activado_producto_cotizador" />
                                      </div>
                                      <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Activado</label>
                                    </div>
                                  </div>
                                  <br/>
                                </li>



                                <li>
                                  <div class="uk-width-medium-1-1">
                                    <!--uk-margin-large-bottom-->
                                    <div class="md-card ">
                                      <div class="md-card-toolbar">
                                        <h3 class="md-card-toolbar-heading-text">Fotografías</h3>
                                      </div>
                                      <div class="md-card-content" >
                                        <!--<h3 class="heading_a uk-margin-bottom"></h3>-->
                                        <h4>Fotografías actuales del producto</h4>
                                        <div  id="modificar_galeria_producto_cotizador" class="uk-grid" data-uk-grid-margin>
                                        </div>
                                      </div>      
                                      <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-3">
                                          <div class="md-card">
                                            <div class="md-card-content">
                                              <h5>
                                                  Fotografía 1
                                              </h5>
                                              <input type="file" id="modificar_srcimg1_producto_cotizador" name="srcimg1_producto" class="dropify" data-max-file-size="2000K"/>
                                              <input type="hidden" id="modificar_srcimg1_producto_cotizadorBD" name="srcimg1_productoBD" />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="uk-width-medium-1-3">
                                          <div class="md-card">
                                            <div class="md-card-content">
                                              <h5>
                                                  Fotografía 2
                                              </h5>
                                              <input type="file" id="modificar_srcimg2_producto_cotizador" name="srcimg2_producto" class="dropify" data-max-file-size="2000K" />
                                              <input type="hidden" id="modificar_srcimg2_producto_lineaBD" name="srcimg2_productoBD" />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="uk-width-medium-1-3">
                                          <div class="md-card">
                                            <div class="md-card-content">
                                              <h5>
                                                  Fotografía 3
                                              </h5>
                                              <input type="file" id="modificar_srcimg3_producto_cotizador" name="srcimg3_producto" class="dropify" data-max-file-size="2000K" />
                                              <input type="hidden" id="modificar_srcimg3_producto_cotizadorBD" name="srcimg3_productoBD" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>                          
                                    </div>                                  
                                  </div>
                                </li>



                                <!--
                                <li>
                                  <div class="md-card-content" >
                                    <h4>Fotografías</h4>
                                    <h5 >Fotografías actuales del producto</h5>
                                    <div  id="modificar_galeria_producto_cotizador" class="uk-grid" data-uk-grid-margin>
                                    </div>
                                  </div> 
                                  <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-large-1-3">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5>
                                              Fotografía 1
                                          </h5>
                                          <input type="file" id="modificar_srcimg1_producto_cotizador" name="srcimg1_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="modificar_srcimg1_producto_cotizadorBD" name="srcimg1_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="uk-width-large-1-3">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5>
                                              Fotografía 2
                                          </h5>
                                          <input type="file" id="modificar_srcimg2_producto_cotizador" name="srcimg2_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="modificar_srcimg2_producto_cotizadorBD" name="srcimg2_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="uk-width-large-1-3">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5>
                                              Fotografía 3
                                          </h5>
                                          <input type="file" id="modificar_srcimg3_producto_cotizador" name="srcimg3_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="modificar_srcimg3_producto_cotizadorBD" name="srcimg3_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                -->
                              </ul>
                            </div>
                          </div>
                        </div> 
                      </form>
                    </div>
                  </div>
                  <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="UIkit.modal.confirm('Guardar y Actualizar?', function(){  validarFormulario('form_modificar_productos_cotizador');  });">Actualziar Producto </button> 
                  </div>
                </div>  
              </div>              
              <!--</div>-->
              <!--end PopUp de datos especificos-->
            </div><!-- end Contenido de Item de Producto en Cotizador -->
            <!--///////////////////////////////////////////////////////////// -->
            <!--Linea divisora-->
            <div>
              <hr>
            </div>
            <div id="productosComplementario">
              <h3 class="heading_b uk-margin-bottom"> Productos en Complementario </h3>
              <div id="productosComplementarioPlantilla" class="uk-grid uk-grid-medium uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
              </div>
              <!--/////////////////////////////////// -->
              <!--/////////////////////////////////// -->
              <!-- PopUp para eliminar de producto JS -->
              <div class="uk-width-medium-1-3" >
                <div class="uk-modal" id="popup_productEliminar_Complementario" >
                  <div class="uk-modal-dialog">
                    <div class="uk-modal-header">
                      <h3 class="uk-modal-title" id="nombreEliminarH3">Usuario <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="headline tooltip">&#xE8FD;</i></h3>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                      <div class="uk-width-medium-1-3">
                      </div>
                      <div class="uk-width-medium-1-3">
                      </div>                                      
                    </div>
                    <div class="uk-modal-footer uk-text-right">
                      <button type="button" class="md-btn md-btn-flat uk-modal-close">Cerrar</button><button data-uk-modal="{target:'#modal_new'}" type="button" class="md-btn md-btn-flat md-btn-flat-primary">Eliminar</button>
                    </div>
                  </div>
                </div>
                <div class="uk-modal" id="modal_new">
                  <div class="uk-modal-dialog">
                    <button type="button" class="uk-modal-close uk-close"></button>
                    <p class="uk-text-bold">Elimnacion Exitosa.</p>
                  </div>
                </div>
              </div>
              <div class="uk-modal" id="popup_nuevoproductoComplementario">
                <div class="uk-modal-dialog uk-modal-dialog-large">
                  <button type="button" class="uk-modal-close uk-close"></button>
                  <div class="uk-modal-header">
                    <h3 class="uk-modal-title"><i class="material-icons" data-uk-tooltip="{pos:'top'}">&#xE148;</i>&nbsp;&nbsp;Nuevo Producto en Complementario</h3>
                  </div>
                  <div class="md-card">
                    <div class="md-card-content">
                      <form action="" class="uk-form-stacked" id="altaproductoComplementario" name="altaproductoComplementario">
                        <div class="md-card-content large-padding">
                          <div class="uk-grid uk-grid-divider uk-grid-medium form_section form_section_separator" data-uk-grid-margin>
                            <div class="uk-width-large-1-2">
                              <h4 class="heading_c uk-margin-small-bottom">Datos Generales </h4>
                              <ul class="md-list">
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label> Nombre del Producto <span class="req"> * </span> </label> <br/>
                                      <input type="text" name="alta_nombre_producto_Complementario" id="alta_nombre_producto_Complementario" class="md-input" />
                                    </div> 
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label for="wizard_address"> Descripción <span class="req"> * </span> </label> <br/>
                                      <textarea class="md-input" name="alta_descripcion_producto_Complementario" id="alta_descripcion_producto_Complementario" cols="30" rows="1"> </textarea>
                                    </div>                                    
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                     <div id="ingredientesCheck" class="uk-width-large-1-1">
                                      <h5 class="heading_c uk-margin-small-bottom">Seo </h5>
                                      <input type="text" class="md-input" name="alta_seo_producto_Complementario" id="alta_seo_producto_Complementario"></input>
                                     </div>
                                  </div>
                                  <br/>
                                </li>
                                 <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label> Precio <span class="req"> * </span> </label> <br/>
                                      <input type="number" min="0" name="alta_precioreal_producto_Complementario" id="alta_precioreal_producto_Complementario" class="md-input" />
                                    </div> 
                                  </div>
                                  <br/>
                                </li>                                
                                
                              </ul>
                            </div>
                            <div class="uk-width-large-1-2">                              
                              <ul class="md-list">
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-1">
                                      <div class="uk-float-right">
                                        <input type="checkbox" data-switchery checked name="alta_activado_producto_Complementario" id="alta_activado_producto_Complementario" />
                                      </div>
                                      <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Activado</label>
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-1"><br/>
                                      <label class="uk-h6"><i class="uk-icon-calendar "></i>&nbsp;Stock</label><br/>
                                      <input type="number" min="0" class="md-input" name="alta_stock_producto_Complementario" id="alta_stock_producto_Complementario"  />
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-1">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5 id="alta_srcimg1_producto_Complementario_titulo">
                                              Fotografía 1
                                          </h5>
                                          <input type="file" id="alta_srcimg1_producto_Complementario" name="srcimg1_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="alta_srcimg1_producto_ComplementarioBD" name="srcimg1_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br/>
                                </li>                                  
                              </ul>
                            </div>
                          </div>
                        </div> 
                      </form>
                    </div>
                  </div>
                  <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="UIkit.modal.confirm('Guardar y Registrar?', function(){ validarFormulario('form_alta_productos_complementario'); });">Agregar Producto </button> 
                  </div>
                </div>  
              </div>              
              <!--/////////////////////////////////// -->
              <!--/////////////////////////////////// -->              
              <!-- PopUp para modificaci? de Datos Especificos de un Producto Complemetario -->
              <div class="uk-modal" id="popup_modificarproductoComplementario">
                <div class="uk-modal-dialog uk-modal-dialog-large">
                  <button type="button" class="uk-modal-close uk-close"></button>
                  <div class="uk-modal-header">
                    <h3 class="uk-modal-title"><i class="material-icons" data-uk-tooltip="{pos:'top'}">&#xE148;</i>&nbsp;&nbsp;Modificar Producto en Complementario</h3>
                  </div>
                  <div class="md-card">
                    <div class="md-card-content">
                      <form action="" class="uk-form-stacked" id="formActualizarProductoComplementario" name="formActualizarProductoComplementario">
                        <div class="md-card-content large-padding">
                          <div class="uk-grid uk-grid-divider uk-grid-medium form_section form_section_separator" data-uk-grid-margin>
                            <div class="uk-width-large-1-2">
                              <h4 class="heading_c uk-margin-small-bottom">Datos Generales </h4>
                              <input type="hidden" name="modificar_id_producto_Complementario" id="modificar_id_producto_Complementario" class="md-input" />
                              <input type="hidden" name="modificar_idProveedor_producto_Complementario" id="modificar_idProveedor_producto_Complementario" class="md-input" />
                              <ul class="md-list">
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label> Nombre del Producto <span class="req"> * </span> </label> <br/>
                                      <input type="text" name="modificar_nombre_producto_Complementario" id="modificar_nombre_producto_Complementario" class="md-input" />
                                    </div> 
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label for="wizard_address"> Descripción <span class="req"> * </span> </label> <br/>
                                      <textarea class="md-input" name="modificar_descripcion_producto_Complementario" id="modificar_descripcion_producto_Complementario" cols="30" rows="1"> </textarea>
                                    </div>                                    
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                     <div id="ingredientesCheck" class="uk-width-large-1-1">
                                      <h5 class="heading_c uk-margin-small-bottom">Seo </h5>
                                      <input type="text" class="md-input" name="modificar_seo_producto_Complementario" id="modificar_seo_producto_Complementario"></input>
                                     </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid">
                                     <div class="uk-width-large-1-1">
                                    </div>
                                    <div class="uk-width-large-1-1"><br/>
                                      <label class="uk-h6"><i class="uk-icon-calendar "></i>&nbsp;Stock</label><br/>
                                      <input type="number" min="0" class="md-input" name="modificar_stock_producto_Complementario" id="modificar_stock_producto_Complementario"  />
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="uk-grid ">
                                    <div class="uk-width-large-1-1">
                                      <label> Precio <span class="req"> * </span> </label> <br/>
                                      <input type="text" name="modificar_precio_producto_Complementario" id="modificar_precio_producto_Complementario" class="md-input" />
                                    </div> 
                                  </div>
                                  <br/>
                                </li>                                
                              </ul>
                            </div>
                            <div class="uk-width-large-1-2">                               
                              <ul class="md-list">                                    
                                <li>
                                  <div class="uk-grid">
                                    <div class="uk-width-large-1-1">
                                      <div class="uk-float-right">
                                        <input type="checkbox" data-switchery checked name="modificar_activado_producto_Complementario" id="modificar_activado_producto_Complementario" />
                                      </div>
                                      <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Activado</label>
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                                <li>
                                  <div class="md-card-content" >
                                    <h4>Fotografías</h4>
                                    <h5>Fotografías actuales del producto</h5>
                                    <div  id="modificar_galeria_producto_Complementario" class="uk-grid" data-uk-grid-margin>
                                    </div>
                                  </div> 
                                  <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-1">
                                      <div class="md-card">
                                        <div class="md-card-content">
                                          <h5 class="heading_a uk-margin-small-bottom" id="modificar_srcimg1_producto_Complementario_titulo">
                                              Fotografá 1
                                          </h5>
                                          <input type="file" id="modificar_srcimg1_producto_Complementario" name="srcimg1_producto" class="dropify" data-max-file-size="2000K" />
                                          <input type="hidden" id="modificar_srcimg1_producto_ComplementarioBD" name="srcimg1_productoBD" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br/>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div> 
                      </form>
                    </div>
                  </div>
                  <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="UIkit.modal.confirm('Guardar y Actualizar?', function(){ validarFormulario('form_modificar_productos_complementario'); });">Agregar Producto </button> 
                  </div>
                </div>  
              </div>              
              <!--</div>-->
              <!--end PopUp de datos especificos-->
            </div><!-- end Contenido de Item de Producto en Cotizador -->
            <!--///////////////////////////////////////////////////////////// -->
            <div>
              <br/><br/>
            </div>
            <!--Contenido de Item de Producto en Complementarios -->
            <div>
              <br/><br/>
            </div>
            <!--Contenido de Item de Producto en Cotizador -->
            <!-- end Contenido de Item de Producto en Cotizador -->
        </div>
        <!-- FIN MIGUEL HTML -->
        <div id="contenido_Cotizador"><!-- Contenido de Pesta? Cotizador -->
          <h3 class="heading_b uk-margin-bottom"> Cotizaciones De Productos  </h3>
          <div class="md-card uk-margin-medium-bottom">
           <div class="md-card-content">
            <div class="uk-overflow-container">
              <table class="uk-table uk-table-nowrap uk-table-hover" id="tblordenespendiente">
               <thead>
                 <tr >
                   <th class="uk-width-1-10 uk-text-center">No. Orden Cotizaci?</th>
                   <th class="uk-width-2-10 uk-text-center">Nombre Producto</th>
                   <th class="uk-width-1-10 uk-text-center">Fecha de Evento</th>
                   <th class="uk-width-1-10 uk-text-center">Tipo de Evento</th>
                   <th class="uk-width-1-10 uk-text-center">$Costo S. Tienda</th>
                   <th class="uk-width-1-10 uk-text-center">$Costo S. Domicilio</th>
                 </tr>
               </thead>
               <tbody id="tblcotizacionesproductos" name="tblcotizacionesproductos">
               </tbody>
             </table>
           </div>
         </div>
       </div>
       <div id="ordenesdecotizacionesproductos"></div>
       <h3 class="heading_b uk-margin-bottom"> Cotizaciones De Productos Nuevos  </h3>
       <div class="md-card uk-margin-medium-bottom">
         <div class="md-card-content">
          <div class="uk-overflow-container">
           <table class="uk-table uk-table-nowrap uk-table-hover">
            <thead>
             <tr>
              <th class="uk-width-1-10 uk-text-center">No. Orden Cotizaci?</th>
              <th class="uk-width-1-10 uk-text-center">Fecha de Entrega</th>
              <th class="uk-width-1-10 uk-text-center">Tipo de Evento</th>
              <th class="uk-width-1-10 uk-text-center">$Costo S. Tienda</th>
              <th class="uk-width-1-10 uk-text-center">$Costo S. Domicilio</th>
            </tr>
          </thead>
          <tbody id="tblcotizacionesproductosnuevos" name="tblcotizacionesproductosnuevos"></tbody>
      </table>
    </div>
  </div>
</div>
</div>
<div id="contenido_Notificacion">
  <div class="md-card">
    <div class="md-card-content">
      <div class="uk-overflow-container uk-margin-bottom">
        <table class="uk-table uk-table-align-vertical "><!--  -->
          <thead>
            <tr>
              <th>Asunto</th>
              <th>Mensaje</th>
              <th>Fecha</th>
              <th>Emisor</th>
            </tr>
          </thead>
          <tbody id="tblnotificacion" name="tblnotificacion"></tbody>   
        </table></div></div></div>
      </div>
    </div>
    <div class="uk-modal" id="mapa"><!--Mapa-->
     <div class="uk-modal-dialog">
      <button type="button" class="uk-modal-close uk-close"></button>
       <div class="uk-modal-header">
        <h4 class="md-card-toolbar-heading-text" id="direccionMapa"></h4>
       </div>  
       <div class="md-card"><div id="gmap" class="gmap" style="width:100%;height:400px;"></div></div>
     </div>
    </div><!--end Mapa-->
  </div>
</div>
</div>

<!-- CODIGO EN GENERAL -->

<!--CODIGO Misael Bravo-->

<?php include('./codigo_general/script_common.php'); ?>
<script type="text/javascript">

var solicitadoBy="WEB";
var idmapaOrdenes=1;
var idmapaCotizaciones=2;
var idmapaCotizacionesNuevas=3;
var eventos_Calendario=[];

//Variables para saber que tabla hace referencia en Ordenes 
var tabla_Ordenes=1;
var tabla_OrdenesPendiente=2;
var tabla_OrdenesHistorial=3;

//Variables de Sesion
var idtblproveedor = 1;
var tblproveedorNombre = "MisPasteles";
var emailproveedor = "mispasteles@gmail.com";

/*
 COMIENZA VARIABLES MIGUEL
 */
  var solicitadoBy="WEB";
  var arregloInfoUnProducto=[];
  var arregloInfoTodosProducto=[];
  var arregloInfoUnProductoCotizador=[];
  var arregloInfoTodosProductoCotizador=[];
  var arregloInfoUnProductoComplementario=[];
  var arregloInfoTodosProductoComplementario=[];
  var arregloCategoriaProductoId=[];
  var arregloCategoriaProductoNombre=[];
  var arregloClasificacionProductoId=[];
  var arregloClasificacionProductoNombre=[];
  var arregloEspecifiIngredientesId=[];
  var arregloEspecifiIngredientesNombre=[];
  var arregloEventosId=[];
  var arregloEventosNombre=[];
  var arregloImagenesTodosProducto=[];
  var arregloImagenesUnProducto=[];
  var arregloImagenesTodosProductoCotizador=[];
  var arregloImagenesUnProductoCotizador=[];
  var arregloImagenesTodosProductoComplementario=[];
  var arregloImagenesUnProductoComplementario=[];
  /*
  FIN VARIABLES MIGUEL
   */
$( window ).ready(function()
{
  console.log('pagina lista');
    /*
    READY MIGUEL
     */
    cargarValoresDefault();
    /*
    END READY MIGUEL
     */
    
    //funcion para mostrar la lista de ordenes pendientes
    llenarDatosCalendario();
    indicadoresIndex();
    mostrarListaOrdenes();
    mostrarCotizaciones();
    mostrarCotizacionesProductosNuevos();
    mostrarNotificaciones();
    cargaCalendario();

    
  });
  /*
  FUNCIONES MIGUEL
   */
  function cargarValoresDefault(){     
    solicitadoBy="WEB";    
    arregloInfoUnProducto=[];
    arregloInfoUnProductoCotizador=[];
    arregloInfoUnProductoComplementario=[];
    arregloInfoTodosProducto=[];
    arregloInfoTodosProductoCotizador=[];
    arregloInfoTodosProductoComplementario=[];
    arregloCategoriaProductoId=[];
    arregloCategoriaProductoNombre=[];
    arregloClasificacionProductoId=[];
    arregloClasificacionProductoNombre=[];
    arregloEspecifiIngredientesId=[];
    arregloEspecifiIngredientesNombre=[];
    arregloEventosId=[];
    arregloEventosNombre=[];
    arregloImagenesTodosProducto=[];
    arregloImagenesUnProducto=[];
    arregloImagenesTodosProductoCotizador=[];
    arregloImagenesUnProductoCotizador=[]; 
    cargarValoresAltaProductoLinea();
    mostrarProductos();
  }
  /*
  COMIENZA FUNCIONES MIGUEL
   */
  /**
   * FUNCION USADA PARA VALIDAR LOS FORMULARIOS DE INICIO->PRODCUTOS Y PERFIL DE TIENDA
   * @param  {[STRING]} formularioAValidar [NOMBRE DEL FORMULARIO A VALIDAR]
   * @return {[MENSAJE ]}                    [INFORMACION SOBRE LA VALIDACION Y ACCION DEL FORMULARIO]
   */
  function validarFormulario(formularioAValidar)
  {
    console.log('entro a la function validarFormulario');
    if(formularioAValidar=='form_alta_productos_linea')
    {
      /*
      VARIABLES
       */
      boolError=false;
      boolErrorNombre=false;
      boolErrorDescripcion=false;
      boolErrorIngredientes=false;
      boolErrorSeo=false;
      boolErrorCategoria=false;
      boolErrorClasificacion=false;

      boolErrorSrcimg1=false;
      boolErrorSrcimg2=false;
      boolErrorSrcimg3=false;
      boolErrorPorciones=false;

      boolErrorDiasElaboracion=false;
      boolErrorStock=false;
      boolErrorPrecioReal=false;

      boolErrorEspecifIngrediente=false;

      mensajeErrorProductoLinea='';
      //tblproducto
      nombreproduct='';
      descripcion='';
      ingredientes='';
      seo='';
      promcalif='';
      activado='';
      idtblproveedor='';
      idtblcategproduc='';
      idtblclasifproduct='';
      emailcreo='';

      //productoimg
      srcimg1='';
      srcimg2='';
      srcimg3='';

      //productodetalle
      diaselaboracion='';
      stock='';
      precioreal='';
      preciobp='';
      diametro='';
      largo='';
      ancho='';
      porciones='';
      piezas='';
      idtblespecificingrediente='';
      console.log('entro a if de form_alta_productos_linea');
      //OBTENEMOS LOS DATOS DEL FORMULARIO
      nombreproduct=$('#alta_nombre_producto_linea').val();
      descripcion=$('#alta_descripcion_producto_linea').val();
      ingredientes=$('#alta_ingredientes_producto_linea').val();
      seo=$('#alta_seo_producto_linea').val();
      promcalif='5';
      activado=$('#alta_activado_producto_linea').val();
      if(activado=='on'){activado=1;}
      idtblproveedor='1';
      idtblcategproduc=$('#alta_categoria_producto_linea').val();
      idtblclasifproduct=$('#alta_clasificacion_producto_linea').val();
      emailcreo='miguel@bepickler.com';

      srcimg1=$('#alta_srcimg1_producto_linea').val().replace(/C:\\fakepath\\/i, '');
      srcimg2=$('#alta_srcimg2_producto_linea').val().replace(/C:\\fakepath\\/i, '');
      srcimg3=$('#alta_srcimg3_producto_linea').val().replace(/C:\\fakepath\\/i, '');

      if(srcimg1!=''||srcimg2!=''||srcimg3!='')
        boolHabilitarValidacionSrcImg=true;

      diaselaboracion=$('#alta_detalle_diasElborar_producto_linea').val();
      stock=$('#alta_detalle_stock_producto_linea').val();
      precioreal=$('#alta_detalle_precioreal_producto_linea').val();

      preciobp=precioreal;
      diametro=$('#alta_clasifcategproduct_circular_diametro_producto_linea').val();
      largo=$('#alta_clasifcategproduct_cuadrado_largo_producto_linea').val();
      ancho=$('#alta_clasifcategproduct_cuadrado_ancho_producto_linea').val();
      piezas=$('#alta_clasifcategproduct_piezas_producto_linea').val();
      activado=1;
      idtblespecificingrediente=$('#alta_especificingredientes_producto_linea').val();
      if(diametro!=''){
        porciones=Math.round((Math.PI*diametro)/2);
        largo='';
        ancho='';
        piezas='';
      }
      else if(largo!=''&&ancho!=''){
        porciones=largo*ancho/2*5;
        diametro='';
        piezas='';
      }
      else if(piezas!=''){
        porciones=piezas;
        largo='';
        ancho='';
        diametro='';
      }
      /////////////////////////DATOS GENERALES/////////////////////////
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(nombreproduct=='')
      {
        boolError=true;
        boolErrorNombre=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(nombreproduct.length>90)
      {
        boolError=true;
        boolErrorNombre=true;
      }
      //VALIDAR CAMPOS SOLO CON ESPACIOS
      if(!nombreproduct.trim())
      {
        boolError=true;
        boolErrorNombre=true;
      }
      if(boolErrorNombre)
        $( "#alta_nombre_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_nombre_producto_linea" ).removeClass( "md-input-danger" );
      //descripcion -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(descripcion=='')
      {
        boolError=true;
        boolErrorDescripcion=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(descripcion.length>300)
      {
        boolError=true;
        boolErrorDescripcion=true;
      }
      //VALIDAR CAMPOS SOLO CON ESPACIOS
      if(!descripcion.trim())
      {
        boolError=true;
        boolErrorDescripcion=true;
      }
      if(boolErrorDescripcion)
        $( "#alta_descripcion_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_descripcion_producto_linea" ).removeClass( "md-input-danger" );
      //ingredientes -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(ingredientes=='')
      {
        boolError=true;
        boolErrorIngredientes=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(ingredientes.length>250)
      {
        boolError=true;
        boolErrorIngredientes=true;
      }
      //VALIDAR CAMPOS SOLO CON ESPACIOS
      if(!ingredientes.trim())
      {
        boolError=true;
        boolErrorIngredientes=true;
      }
      if(boolErrorIngredientes)
        $( "#alta_ingredientes_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_ingredientes_producto_linea" ).removeClass( "md-input-danger" );
      //seo -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(seo=='')
      {
        boolError=true;
        boolErrorSeo=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(seo.length>250)
      {
        boolError=true;
        boolErrorSeo=true;
      }
      //VALIDAR CAMPOS SOLO CON ESPACIOS
      if(!seo.trim())
      {
        boolError=true;
        boolErrorSeo=true;
      }
      if(boolErrorSeo)
        $( "#alta_seo_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_seo_producto_linea" ).removeClass( "md-input-danger" );
      //idtblcategproduc -> Select
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(idtblcategproduc=='')
      {
        boolError=true;
        boolErrorCategoria=true;
      }    
      if(boolErrorCategoria)
        $( "#alta_categoria_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_categoria_producto_linea" ).removeClass( "md-input-danger" );
      //idtblclasifproduct -> Select
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(idtblclasifproduct=='')
      {
        boolError=true;
        boolErrorClasificacion=true;
      }    
      if(boolErrorClasificacion)
        $( "#alta_clasificacion_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_clasificacion_producto_linea" ).removeClass( "md-input-danger" );
      ///////////////////////////////////////////////////////////////////////////
      /////////////////////////DATOS FOTOGRAFIA//////////////////////////////////
      if(boolHabilitarValidacionSrcImg)
      {
        if(srcimg1=='')
        {
          console.log('srcimg1 vacio');
          boolError=true;
          boolErrorSrcimg1=true;
        }
        if(boolErrorSrcimg1)
          $( "#alta_srcimg1_producto_linea_titulo" ).css('color','red');
        else
          $( "#alta_srcimg1_producto_linea_titulo" ).css('color','black');
        if(srcimg2=='')
        {
          console.log('srcimg1 vacio');
          boolError=true;
          boolErrorSrcimg2=true;
        }
        if(boolErrorSrcimg2)
          $( "#alta_srcimg2_producto_linea_titulo" ).css('color','red');
        else
          $( "#alta_srcimg2_producto_linea_titulo" ).css('color','black');
        if(srcimg3=='')
        {
          console.log('srcimg1 vacio');
          boolError=true;
          boolErrorSrcimg3=true;
        }
        if(boolErrorSrcimg3)
          $( "#alta_srcimg3_producto_linea_titulo" ).css('color','red');
        else
          $( "#alta_srcimg3_producto_linea_titulo" ).css('color','black');
      }
      ///////////////////////////////////////////////////////////////////////////
      ////////////////////////////DATOS DETALLES///////////////////////////////
      //diaselaboracion -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(diaselaboracion=='')
      {
        boolError=true;
        boolErrorDiasElaboracion=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(diaselaboracion<0)
      {
        console.log('menor a cero');
        boolError=true;
        boolErrorDiasElaboracion=true;
      }
      //VALIDAR CAMPOS NO SON NUMEROS
      if(!$.isNumeric(diaselaboracion))
      {
        boolError=true;
        boolErrorDiasElaboracion=true;

      }
      if(boolErrorDiasElaboracion)
        $( "#alta_detalle_diasElborar_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_detalle_diasElborar_producto_linea" ).removeClass( "md-input-danger" );
      //stock -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(stock=='')
      {
        boolError=true;
        boolErrorStock=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(stock<0)
      {
        console.log('menor a cero');
        boolError=true;
        boolErrorStock=true;
      }
      //VALIDAR CAMPOS NO SON NUMEROS
      if(!$.isNumeric(stock))
      {
        boolError=true;
        boolErrorStock=true;

      }
      if(boolErrorStock)
        $( "#alta_detalle_stock_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_detalle_stock_producto_linea" ).removeClass( "md-input-danger" );
      //precioreal -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(precioreal=='')
      {
        boolError=true;
        boolErrorPrecioReal=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(precioreal<0)
      {
        console.log('menor a cero');
        boolError=true;
        boolErrorPrecioReal=true;
      }
      //VALIDAR CAMPOS NO SON NUMEROS
      if(!$.isNumeric(precioreal))
      {
        boolError=true;
        boolErrorPrecioReal=true;

      }
      if(boolErrorPrecioReal)
        $( "#alta_detalle_precioreal_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_detalle_precioreal_producto_linea" ).removeClass( "md-input-danger" );
      //porciones -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(porciones=='')
      {
        boolError=true;
        boolErrorPorciones=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(porciones<0)
      {
        console.log('menor a cero');
        boolError=true;
        boolErrorPorciones=true;
      }
      //VALIDAR CAMPOS NO SON NUMEROS
      if(!$.isNumeric(porciones))
      {
        boolError=true;
        boolErrorPorciones=true;

      }
      if(boolErrorPorciones)
        $( "#alta_forma_producto_linea_titulo" ).css('color','red');
      else
        $( "#alta_forma_producto_linea_titulo" ).css('color','black');
      /////////////////////////////////////////////////////////////////////////
      ////////////////////////////DATOS INGREDIENTE ESPECIAL///////////////////
      //idtblclasifproduct -> Select
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(idtblespecificingrediente=='')
      {
        boolError=true;
        boolErrorEspecifIngrediente=true;
      }    
      if(boolErrorEspecifIngrediente)
        $( "#alta_especificingredientes_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#alta_especificingredientes_producto_linea" ).removeClass( "md-input-danger" );
      /////////////////////////////////////////////////////////////////////////
      if(!boolError)
      {
        console.log('registrarProductoLinea');
        registrarProductoLinea();
      }
      else
      {
        UIkit.modal.alert('Atención favor de verificar y completar los campos marcados en rojo!'+mensajeErrorProductoLinea);
      }
      //registrarProductoLinea();
    }
    else if(formularioAValidar=='form_modificar_productos_linea_detalle')
    {
       /*
      VARIABLES
       */
      boolError=false;
      boolErrorPorciones=false;
      boolErrorDiasElaboracion=false;
      boolErrorStock=false;
      boolErrorPrecioReal=false;
      boolErrorEspecifIngrediente=false;
      //productodetalle
      diaselaboracion='';
      stock='';
      precioreal='';
      preciobp='';
      diametro='';
      largo='';
      ancho='';
      porciones='';
      piezas='';
      idtblespecifingrediente='';
      ///////////////////////////////
      //OBTENEMOS LOS DATOS
      diaselaboracion=$('#modificar_detalle_diasElborar_producto_linea').val();
      stock=$('#modificar_detalle_stock_producto_linea').val();
      precioreal=$('#modificar_detalle_precio_producto_linea').val();
      preciobp=precioreal;
      diametro=$('#modificar_clasifcategproduct_circular_diametro_producto_linea').val();
      largo=$('#modificar_clasifcategproduct_cuadrado_largo_producto_linea').val();
      ancho=$('#modificar_clasifcategproduct_cuadrado_ancho_producto_linea').val();
      piezas=$('#modificar_clasifcategproduct_piezas_producto_linea').val();
      activado=1;
      idtblespecificingrediente=$('#modificar_especificingredientes_producto_linea').val();
      if(diametro!=''){
        porciones=Math.round((Math.PI*diametro)/2);
        largo='';
        ancho='';
        piezas='';
      }
      else if(largo!=''&&ancho!=''){
        porciones=largo*ancho/2*5;
        diametro='';
        piezas='';
      }
      else if(piezas!=''){
        porciones=piezas;
        largo='';
        ancho='';
        diametro='';
      }
      //////////////////////////////////////////////////////////////////////////////
      ////////////////////////////DATOS DETALLES///////////////////////////////
      //diaselaboracion -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(diaselaboracion=='')
      {
        boolError=true;
        boolErrorDiasElaboracion=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(diaselaboracion<0)
      {
        boolError=true;
        boolErrorDiasElaboracion=true;
      }
      //VALIDAR CAMPOS NO SON NUMEROS
      if(!$.isNumeric(diaselaboracion))
      {
        boolError=true;
        boolErrorDiasElaboracion=true;
      }
      if(boolErrorDiasElaboracion)
        $( "#modificar_detalle_diasElborar_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#modificar_detalle_diasElborar_producto_linea" ).removeClass( "md-input-danger" );
      //stock -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(stock=='')
      {
        boolError=true;
        boolErrorStock=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(stock<0)
      {
        boolError=true;
        boolErrorStock=true;
      }
      //VALIDAR CAMPOS NO SON NUMEROS
      if(!$.isNumeric(stock))
      {
        boolError=true;
        boolErrorStock=true;
      }
      if(boolErrorStock)
        $( "#modificar_detalle_stock_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#modificar_detalle_stock_producto_linea" ).removeClass( "md-input-danger" );
      //precioreal -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(precioreal=='')
      {
        boolError=true;
        boolErrorPrecioReal=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(precioreal<0)
      {
        boolError=true;
        boolErrorPrecioReal=true;
      }
      //VALIDAR CAMPOS NO SON NUMEROS
      if(!$.isNumeric(precioreal))
      {
        boolError=true;
        boolErrorPrecioReal=true;
      }
      if(boolErrorPrecioReal)
        $( "#modificar_detalle_precio_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#modificar_detalle_precio_producto_linea" ).removeClass( "md-input-danger" );
      //porciones -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(porciones=='')
      {
        boolError=true;
        boolErrorPorciones=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(porciones<0)
      {
        boolError=true;
        boolErrorPorciones=true;
      }
      //VALIDAR CAMPOS NO SON NUMEROS
      if(!$.isNumeric(porciones))
      {
        boolError=true;
        boolErrorPorciones=true;
      }
      if(boolErrorPorciones)
        $( "#modificar_forma_producto_linea_titulo" ).css('color','red');
      else
        $( "#modificar_forma_producto_linea_titulo" ).css('color','black');
      /////////////////////////////////////////////////////////////////////////
      ////////////////////////////DATOS INGREDIENTE ESPECIAL///////////////////
      //idtblclasifproduct -> Select
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(idtblespecificingrediente=='')
      {
        boolError=true;
        boolErrorEspecifIngrediente=true;
      }    
      if(boolErrorEspecifIngrediente)
        $( "#modificar_especificingredientes_producto_linea" ).addClass( "md-input-danger" );
      else
        $( "#modificar_especificingredientes_producto_linea" ).removeClass( "md-input-danger" );
      /////////////////////////////////////////////////////////////////////////
      if(!boolError)
      {
        console.log('actualizarProductoDetalle');
        actualizarProductoDetalle();      
      }
      else
      {
        UIkit.modal.alert('Atención favor de verificar y completar los campos marcados en rojo!');
      }
       
    }
    else if(formularioAValidar=='form_modificar_productos_linea_general')
    {
       /*
      VARIABLES
       */
      boolError=false;
      boolErrorNombre=false;
      boolErrorDescripcion=false;
      boolErrorIngredientes=false;
      boolErrorSeo=false;
      boolErrorCategoria=false;
      boolErrorClasificacion=false;

       //tblproducto
      nombreproduct='';
      descripcion='';
      ingredientes='';
      seo='';
      idtblcategproduc='';
      idtblclasifproduct='';

      //OBTENEMOS LOS DATOS DEL FORMULARIO
      nombreproduct=$('#modificar_nombre_producto_linea_general').val();
      descripcion=$('#modificar_descripcion_producto_linea_general').val();
      ingredientes=$('#modificar_ingredientes_producto_linea_general').val();
      seo=$('#modificar_seo_producto_linea_general').val();      
      idtblcategproduc=$('#modificar_categoria_producto_linea_general').val();
      idtblclasifproduct=$('#modificar_clasificacion_producto_linea_general').val();

      /////////////////////////DATOS GENERALES/////////////////////////
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(nombreproduct=='')
      {
        boolError=true;
        boolErrorNombre=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(nombreproduct.length>90)
      {
        boolError=true;
        boolErrorNombre=true;
      }
      //VALIDAR CAMPOS SOLO CON ESPACIOS
      if(!nombreproduct.trim())
      {
        boolError=true;
        boolErrorNombre=true;
      }
      if(boolErrorNombre)
        $( "#modificar_nombre_producto_linea_general" ).addClass( "md-input-danger" );
      else
        $( "#modificar_nombre_producto_linea_general" ).removeClass( "md-input-danger" );
      //descripcion -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(descripcion=='')
      {
        boolError=true;
        boolErrorDescripcion=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(descripcion.length>300)
      {
        boolError=true;
        boolErrorDescripcion=true;
      }
      //VALIDAR CAMPOS SOLO CON ESPACIOS
      if(!descripcion.trim())
      {
        boolError=true;
        boolErrorDescripcion=true;
      }
      if(boolErrorDescripcion)
        $( "#modificar_descripcion_producto_linea_general" ).addClass( "md-input-danger" );
      else
        $( "#modificar_descripcion_producto_linea_general" ).removeClass( "md-input-danger" );
      //ingredientes -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(ingredientes=='')
      {
        boolError=true;
        boolErrorIngredientes=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(ingredientes.length>250)
      {
        boolError=true;
        boolErrorIngredientes=true;
      }
      //VALIDAR CAMPOS SOLO CON ESPACIOS
      if(!ingredientes.trim())
      {
        boolError=true;
        boolErrorIngredientes=true;
      }
      if(boolErrorIngredientes)
        $( "#modificar_ingredientes_producto_linea_general" ).addClass( "md-input-danger" );
      else
        $( "#modificar_ingredientes_producto_linea_general" ).removeClass( "md-input-danger" );
      //seo -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(seo=='')
      {
        boolError=true;
        boolErrorSeo=true;
      }
      //VALIDAR RANGO DE DATOS ACEPTABLES
      if(seo.length>250)
      {
        boolError=true;
        boolErrorSeo=true;
      }
      //VALIDAR CAMPOS SOLO CON ESPACIOS
      if(!seo.trim())
      {
        boolError=true;
        boolErrorSeo=true;
      }
      if(boolErrorSeo)
        $( "#modificar_seo_producto_linea_general" ).addClass( "md-input-danger" );
      else
        $( "#modificar_seo_producto_linea_general" ).removeClass( "md-input-danger" );
      //idtblcategproduc -> Select
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(idtblcategproduc=='')
      {
        boolError=true;
        boolErrorCategoria=true;
      }    
      if(boolErrorCategoria)
        $( "#modificar_categoria_producto_linea_general" ).addClass( "md-input-danger" );
      else
        $( "#modificar_categoria_producto_linea_general" ).removeClass( "md-input-danger" );
      //idtblclasifproduct -> Select
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      if(idtblclasifproduct=='')
      {
        boolError=true;
        boolErrorClasificacion=true;
      }    
      if(boolErrorClasificacion)
        $( "#modificar_clasificacion_producto_linea_general" ).addClass( "md-input-danger" );
      else
        $( "#modificar_clasificacion_producto_linea_general" ).removeClass( "md-input-danger" );
      ///////////////////////////////////////////////////////////////////////////
      
      if(!boolError)
      {
        console.log('actualizarProductoGeneral');
        actualizarProductoGeneral();      
      }
      else
      {
        UIkit.modal.alert('Atención favor de verificar y completar los campos marcados en rojo!');
      }       
    }
    else if(formularioAValidar=='form_alta_productos_cotizador')
    {
       /*
      VARIABLES
       */
      boolError=false;
      boolErrorNombre=false;
      boolErrorDescripcion=false;
      boolErrorIngredientes=false;
      boolErrorDiasElaboracion=false;
      boolErrorEvento=false;

      boolErrorSrcimg1=false;
      boolErrorSrcimg2=false;
      boolErrorSrcimg3=false;

       //tblproducto
      nombreproduct='';
      descripcion='';
      ingredientes='';
      diaselaboracion='';
      evento='';

      srcimg1='';
      srcimg2='';
      srcimg3='';

      //OBTENEMOS LOS DATOS DEL FORMULARIO
      nombreproduct=$('#alta_nombre_producto_cotizador').val();
      descripcion=$('#alta_descripcion_producto_cotizador').val();
      ingredientes=$('#alta_ingredientes_producto_cotizador').val();
      diaselaboracion=$('#alta_detalle_diasElborar_producto_cotizador').val();
      evento=$('#alta_evento_producto_cotizador').val();

      srcimg1=$('#alta_srcimg1_producto_cotizador').val();
      srcimg2=$('#alta_srcimg2_producto_cotizador').val();
      srcimg3=$('#alta_srcimg3_producto_cotizador').val();

      /////////////////////////DATOS GENERALES/////////////////////////
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorNombre=validarCamposString(nombreproduct,70);      
      if(boolErrorNombre){ $( "#alta_nombre_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_nombre_producto_cotizador" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorDescripcion=validarCamposString(descripcion,300);      
      if(boolErrorDescripcion){ $( "#alta_descripcion_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_descripcion_producto_cotizador" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorIngredientes=validarCamposString(ingredientes,300);      
      if(boolErrorIngredientes){ $( "#alta_ingredientes_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_ingredientes_producto_cotizador" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorDiasElaboracion=validarCamposNumericos(diaselaboracion);      
      if(boolErrorDiasElaboracion){ $( "#alta_detalle_diasElborar_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_detalle_diasElborar_producto_cotizador" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorEvento=validarCamposSelect(evento);      
      if(boolErrorEvento){ $( "#alta_evento_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_evento_producto_cotizador" ).removeClass( "md-input-danger" ); }
      ///////////////////////////////////////////////////////////////////////////
      /////////////////////////DATOS FOTOGRAFIA//////////////////////////////////
      //srcimg1
      boolErrorSrcimg1=validarCamposImg(srcimg1);      
      if(boolErrorSrcimg1){ $( "#alta_srcimg1_producto_cotizador_titulo" ).css('color','red'); boolError=true; }
      else{ $( "#alta_srcimg1_producto_cotizador_titulo" ).css('color','black'); }
      //srcimg2
      boolErrorSrcimg2=validarCamposImg(srcimg2);      
      if(boolErrorSrcimg2){ $( "#alta_srcimg2_producto_cotizador_titulo" ).css('color','red'); boolError=true; }
      else{ $( "#alta_srcimg2_producto_cotizador_titulo" ).css('color','black'); }
      //srcimg3
      boolErrorSrcimg3=validarCamposImg(srcimg3);      
      if(boolErrorSrcimg3){ $( "#alta_srcimg3_producto_cotizador_titulo" ).css('color','red'); boolError=true; }
      else{ $( "#alta_srcimg3_producto_cotizador_titulo" ).css('color','black'); }
      ///////////////////////////////////////////////////////////////////////////
      
      if(!boolError)
      {
        console.log('actualizarProductoGeneral');
        //registrarProductoCotizador();      
      }
      else
      {
        UIkit.modal.alert('Atención favor de verificar y completar los campos marcados en rojo!');
      }       
    }
    else if(formularioAValidar=='form_modificar_productos_cotizador')
    {
       /*
      VARIABLES
       */
      boolError=false;
      boolErrorNombre=false;
      boolErrorDescripcion=false;
      boolErrorIngredientes=false;
      boolErrorDiasElaboracion=false;
      boolErrorEvento=false;

      boolErrorSrcimg1=false;
      boolErrorSrcimg2=false;
      boolErrorSrcimg3=false;

      boolHabilitarValidacionSrcImg=false;

       //tblproducto
      nombreproduct='';
      descripcion='';
      ingredientes='';
      diaselaboracion='';
      evento='';

      srcimg1='';
      srcimg2='';
      srcimg3='';

      //OBTENEMOS LOS DATOS DEL FORMULARIO
      nombreproduct=$('#modificar_nombre_producto_cotizador').val();
      descripcion=$('#modificar_descripcion_producto_cotizador').val();
      ingredientes=$('#modificar_ingredientes_producto_cotizador').val();
      diaselaboracion=$('#modificar_detalle_diasElborar_producto_cotizador').val();
      evento=$('#modificar_evento_producto_cotizador').val();

      srcimg1=$('#modificar_srcimg1_producto_cotizador').val();
      srcimg2=$('#modificar_srcimg2_producto_cotizador').val();
      srcimg3=$('#modificar_srcimg3_producto_cotizador').val();

      if(srcimg1!=''||srcimg2!=''||srcimg3!='')
        boolHabilitarValidacionSrcImg=true;

      /////////////////////////DATOS GENERALES/////////////////////////
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorNombre=validarCamposString(nombreproduct,70);      
      if(boolErrorNombre){ $( "#modificar_nombre_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_nombre_producto_cotizador" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorDescripcion=validarCamposString(descripcion,300);      
      if(boolErrorDescripcion){ $( "#modificar_descripcion_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_descripcion_producto_cotizador" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorIngredientes=validarCamposString(ingredientes,300);      
      if(boolErrorIngredientes){ $( "#modificar_ingredientes_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_ingredientes_producto_cotizador" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorDiasElaboracion=validarCamposNumericos(diaselaboracion);      
      if(boolErrorDiasElaboracion){ $( "#modificar_detalle_diasElborar_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_detalle_diasElborar_producto_cotizador" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorEvento=validarCamposSelect(evento);      
      if(boolErrorEvento){ $( "#modificar_evento_producto_cotizador" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_evento_producto_cotizador" ).removeClass( "md-input-danger" ); }
      ///////////////////////////////////////////////////////////////////////////
      /////////////////////////DATOS FOTOGRAFIA//////////////////////////////////
      //srcimg1
      if(boolHabilitarValidacionSrcImg)
      {
        boolErrorSrcimg1=validarCamposImg(srcimg1);      
        if(boolErrorSrcimg1){ $( "#alta_srcimg1_producto_cotizador_titulo" ).css('color','red'); boolError=true; }
        else{ $( "#alta_srcimg1_producto_cotizador_titulo" ).css('color','black'); }
        //srcimg2
        boolErrorSrcimg2=validarCamposImg(srcimg2);      
        if(boolErrorSrcimg2){ $( "#alta_srcimg2_producto_cotizador_titulo" ).css('color','red'); boolError=true; }
        else{ $( "#alta_srcimg2_producto_cotizador_titulo" ).css('color','black'); }
        //srcimg3
        boolErrorSrcimg3=validarCamposImg(srcimg3);      
        if(boolErrorSrcimg3){ $( "#alta_srcimg3_producto_cotizador_titulo" ).css('color','red'); boolError=true; }
        else{ $( "#alta_srcimg3_producto_cotizador_titulo" ).css('color','black'); }
      }
      ///////////////////////////////////////////////////////////////////////////
      
      if(!boolError)
      {
        console.log('actualizarProductoGeneral');
        actualizarProductoCotizador();      
      }
      else
      {
        UIkit.modal.alert('Atención favor de verificar y completar los campos marcados en rojo!');
      }       
    }
    else if(formularioAValidar=='form_alta_productos_complementario')
    {
       /*
      VARIABLES
       */
      boolError=false;
      boolErrorNombre=false;
      boolErrorDescripcion=false;
      boolErrorSeo=false;
      boolErrorPrecio=false;
      boolErrorStock=false;

      boolErrorSrcimg1=false;

       //tblproducto
      nombreproduct='';
      descripcion='';
      seo='';
      precio='';
      stock='';

      srcimg1='';

      //OBTENEMOS LOS DATOS DEL FORMULARIO
      nombreproduct=$('#alta_nombre_producto_Complementario').val();
      descripcion=$('#alta_descripcion_producto_Complementario').val();
      seo=$('#alta_seo_producto_Complementario').val();
      precio=$('#alta_precioreal_producto_Complementario').val();
      stock=$('#alta_stock_producto_Complementario').val();

      srcimg1=$('#alta_srcimg1_producto_Complementario').val();
      /////////////////////////DATOS GENERALES/////////////////////////
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorNombre=validarCamposString(nombreproduct,90);      
      if(boolErrorNombre){ $( "#alta_nombre_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_nombre_producto_Complementario" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorDescripcion=validarCamposString(descripcion,300);      
      if(boolErrorDescripcion){ $( "#alta_descripcion_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_descripcion_producto_Complementario" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorSeo=validarCamposString(seo,250);      
      if(boolErrorSeo){ $( "#alta_seo_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_seo_producto_Complementario" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorPrecio=validarCamposNumericos(precio);      
      if(boolErrorPrecio){ $( "#alta_precioreal_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_precioreal_producto_Complementario" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorStock=validarCamposNumericos(stock);      
      if(boolErrorStock){ $( "#alta_stock_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#alta_stock_producto_Complementario" ).removeClass( "md-input-danger" ); }
      ///////////////////////////////////////////////////////////////////////////
      /////////////////////////DATOS FOTOGRAFIA//////////////////////////////////
      //srcimg1
      boolErrorSrcimg1=validarCamposImg(srcimg1);      
      if(boolErrorSrcimg1){ $( "#alta_srcimg1_producto_Complementario_titulo" ).css('color','red'); boolError=true; }
      else{ $( "#alta_srcimg1_producto_Complementario_titulo" ).css('color','black'); }
      ///////////////////////////////////////////////////////////////////////////
      
      if(!boolError)
      {
        console.log('registrar producto complementario');
        registrarProductoComplementario();      
      }
      else
      {
        UIkit.modal.alert('Atención favor de verificar y completar los campos marcados en rojo!');
      }       
    }
    else if(formularioAValidar=='form_modificar_productos_complementario')
    {
       /*
      VARIABLES
       */
      boolError=false;
      boolErrorNombre=false;
      boolErrorDescripcion=false;
      boolErrorSeo=false;
      boolErrorPrecio=false;
      boolErrorStock=false;

      boolErrorSrcimg1=false;
      boolHabilitarValidacionSrcImg=false;

       //tblproducto
      nombreproduct='';
      descripcion='';
      seo='';
      precio='';
      stock='';

      srcimg1='';

      //OBTENEMOS LOS DATOS DEL FORMULARIO
      nombreproduct=$('#modificar_nombre_producto_Complementario').val();
      descripcion=$('#modificar_descripcion_producto_Complementario').val();
      seo=$('#modificar_seo_producto_Complementario').val();
      precio=$('#modificar_precio_producto_Complementario').val();
      stock=$('#modificar_stock_producto_Complementario').val();

      srcimg1=$('#modificar_srcimg1_producto_Complementario').val();
      if(srcimg1!='')
        boolHabilitarValidacionSrcImg=true;
      /////////////////////////DATOS GENERALES/////////////////////////
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorNombre=validarCamposString(nombreproduct,90);      
      if(boolErrorNombre){ $( "#modificar_nombre_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_nombre_producto_Complementario" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorDescripcion=validarCamposString(descripcion,300);      
      if(boolErrorDescripcion){ $( "#modificar_descripcion_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_descripcion_producto_Complementario" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorSeo=validarCamposString(seo,250);      
      if(boolErrorSeo){ $( "#modificar_seo_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_seo_producto_Complementario" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> Number
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorPrecio=validarCamposNumericos(precio);      
      if(boolErrorPrecio){ $( "#modificar_precio_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_precio_producto_Complementario" ).removeClass( "md-input-danger" ); }
      //nombreproduct -> String
      //VALIDAR CAMPOS OBLIGATORIOS VACIOS
      boolErrorStock=validarCamposNumericos(stock);      
      if(boolErrorStock){ $( "#modificar_stock_producto_Complementario" ).addClass( "md-input-danger" ); boolError=true; }
      else{ $( "#modificar_stock_producto_Complementario" ).removeClass( "md-input-danger" ); }
      ///////////////////////////////////////////////////////////////////////////
      /////////////////////////DATOS FOTOGRAFIA//////////////////////////////////
      //srcimg1
      if(boolHabilitarValidacionSrcImg)
      {
        boolErrorSrcimg1=validarCamposImg(srcimg1);      
        if(boolErrorSrcimg1){ $( "#modificar_srcimg1_producto_Complementario_titulo" ).css('color','red'); boolError=true; }
        else{ $( "#modificar_srcimg1_producto_Complementario_titulo" ).css('color','black'); }
      }
      ///////////////////////////////////////////////////////////////////////////
      
      if(!boolError)
      {
        console.log('actualizar producto complementario');
        actualizarProductoComplementario();      
      }
      else
      {
        UIkit.modal.alert('Atención favor de verificar y completar los campos marcados en rojo!');
      }       
    }
  

  }
  //FUNCIONES DE VALIDACION DE DATOS/////////////////////////////////////////////////////////////////////////////////
  function validarCamposString(string,numCaracterValido)
  {
    boolErrorString=false;
    if(string=='')
      boolErrorString=true;
    //VALIDAR RANGO DE DATOS ACEPTABLES
    if(string.length>numCaracterValido)
      boolErrorString=true;
    //VALIDAR CAMPOS SOLO CON ESPACIOS
    if(!string.trim())
      boolErrorString=true;
    return boolErrorString;
  }
  function validarCamposNumericos(numero)
  {
    boolErrorNumero=false;
    if(numero=='')
      boolErrorNumero=true;
    //VALIDAR RANGO DE DATOS ACEPTABLES
    if(numero<0)
      boolErrorNumero=true;
    //VALIDAR CAMPOS NO SON NUMEROS
    if(!$.isNumeric(numero))
      boolErrorNumero=true;
    return boolErrorNumero;
  }
  function validarCamposSelect(option)
  {
    boolErrorSelect=false;
    if(option=='')
      boolErrorSelect=true;
    return boolErrorSelect;
  }
  function validarCamposImg(srcimg)
  {
    boolErrorSrcimg=false;
    if(srcimg=='')
      boolErrorSrcimg=true;
    return boolErrorSrcimg;
  }
  function cargarValoresAltaProductoLinea(){    
    //BORRAR Y VOVLER A CARGAR
    arregloCategoriaProductoId.length=0;
    arregloCategoriaProductoNombre.length=0;
    arregloClasificacionProductoId.length=0;
    arregloClasificacionProductoNombre.length=0;
    arregloEspecifiIngredientesId.length=0;    
    arregloEspecifiIngredientesNombre.length=0;
    arregloEventosId.length=0;
    arregloEventosNombre.length=0;
    $("#alta_clasificacion_producto_linea").empty();
    $("#alta_clasificacion_producto_cotizador").empty();

    $("#alta_categoria_producto_linea").empty();
    $("#alta_categoria_producto_cotizador").empty();

    $("#alta_especificingredientes_producto_linea").empty();
    $("#alta_especificingredientes_producto_cotizador").empty();

    //cotizador
    $("#alta_evento_producto_cotizador").empty();

    $("#alta_clasificacion_producto_linea").append('<option value=""></option>');
    $("#alta_clasificacion_producto_cotizador").append('<option value=""></option>');
    $("#alta_categoria_producto_linea").append('<option value=""></option>');
    $("#alta_categoria_producto_cotizador").append('<option value=""></option>');
    $("#alta_especificingredientes_producto_linea").append('<option value=""></option>');
    $("#alta_especificingredientes_producto_cotizador").append('<option value=""></option>');
    $("#alta_evento_producto_cotizador").append('<option value=""></option>');

    //mostar la categorias disponibles
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblcategproductAct.php",  data: {solicitadoBy:"WEB"}  })
      .done(function( msg ) {   $.each(msg.datos, function(i,item){  
        $("#alta_categoria_producto_linea").append('<option value="'+msg.datos[i].idtblcategproduct+'">'+msg.datos[i].tblcategproduct_nombre+'</option>');  
        arregloCategoriaProductoId.push(msg.datos[i].idtblcategproduct);
        arregloCategoriaProductoNombre.push(msg.datos[i].tblcategproduct_nombre);
      });  })
      .fail(function( jqXHR, textStatus ) {  console.log("getAllTblcategproductAct fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/  });
    //mostrar clasificacion disponibles
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblclasifproductAct.php",  data: {solicitadoBy:"WEB"}  })
      .done(function( msg ) {  
        $.each(msg.datos, function(i,item){  $("#alta_clasificacion_producto_linea").append('<option value="'+msg.datos[i].idtblclasifproduct+'">'+msg.datos[i].tblclasifproduct_nombre+'</option>');  
        arregloClasificacionProductoId.push(msg.datos[i].idtblclasifproduct);
        arregloClasificacionProductoNombre.push(msg.datos[i].tblclasifproduct_nombre);
      });
      })
      .fail(function( jqXHR, textStatus ) {  console.log("getAllTblclasifproductAct fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/  });
    // mostar las especific de ingredeinte disponibles
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblespecificingrediente.php",  data: {solicitadoBy:"WEB"}  })
      .done(function( msg ) {  
        $.each(msg.datos, function(i,item){          
          $("#alta_especificingredientes_producto_linea").append('<option value="'+msg.datos[i].idtblespecificingrediente+'">'+msg.datos[i].tblespecificingrediente_nombre+'</option>');
          arregloEspecifiIngredientesId.push(msg.datos[i].idtblespecificingrediente);
          arregloEspecifiIngredientesNombre.push(msg.datos[i].tblespecificingrediente_nombre);  
        });        
      })
      .fail(function( jqXHR, textStatus ) {  console.log("getAllTblespecificingrediente fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/  });
      //COTIZADOR
      $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getAllTbleventoAct.php",  data: {solicitadoBy:"WEB"}  })
      .done(function( msg ) {
        //console.log('entro al edone de eventos'+msg);
        $.each(msg.datos, function(i,item){
          //console.log('entro al each de evento');          
          $("#alta_evento_producto_cotizador").append('<option value="'+msg.datos[i].idtblevento+'">'+msg.datos[i].tblevento_nombre+'</option>');
          arregloEventosId.push(msg.datos[i].idtblevento);
          arregloEventosNombre.push(msg.datos[i].tblevento_nombre);  
        });
        
      })
      .fail(function( jqXHR, textStatus ) {  console.log("getAllTbleventoAct fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/  });
  }
  function mostrarProductos(){
    /*
    Variables
     */
    popup_modificarproductolinea='';
    popup_productEliminar='';
    popup_nuevoproductolinea='';
    ProductoJS='';
    boton_nuevoproductolinea='';
    idtblproducto='';
    tblproducto_nombre='';
    productoAcitvado='';
    productoImagen='';
    productdetalle_stock='';
    productdetalle_idproducto='';
    inputStockProductoLinea='';
    productdetalle_size='';
    arregloMostrarimagen=[]; 
    arregloMostrarimagenCotizador=[]; 
    arregloMostrarimagenComplementario=[]; 
    //CONSTANTES
    popup_modificarproductolinea="#popup_modificarproductolinea";
    popup_modificarproductocotizador="#popup_modificarproductocotizador";
    popup_modificarproductoComplementario="#popup_modificarproductoComplementario";
    popup_productEliminar="#popup_productEliminar";
    popup_nuevoproductolinea="#popup_nuevoproductolinea";
    popup_nuevoproductocotizador="#popup_nuevoproductocotizador";
    popup_nuevoproductoComplementario="#popup_nuevoproductoComplementario";
    PRODUCTOSIMGSRC="./../assests_general/productos/linea/";
    PRODUCTOSIMGCOTIZADORSRC="./../assests_general/productos/cotizador/";
    PRODUCTOSIMGCOMPLEMENTARIOSRC="./../assests_general/productos/complementario/";
    PRODUCTOSIZE="#sizeProductoLinea";
    top="top";
    modal_new="#modal_new";

    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblproductoTblproductoDetalleOfProveedor.php",  data: {solicitadoBy:"WEB",idtblproveedor:"1"}  })
      .done(function( msgTblProductoYDetalles ) {
        
        if(msgTblProductoYDetalles.datos!="Hubo algun error, vuelve a intentarlo WEB")
        {
        $.each(msgTblProductoYDetalles.datos, function(i,item){
          idexArreglo=i;
          idProducto=msgTblProductoYDetalles.datos[i].idProducto;
          nombre=msgTblProductoYDetalles.datos[i].nombre;

          descripcion=msgTblProductoYDetalles.datos[i].descripcion;
          ingredientes=msgTblProductoYDetalles.datos[i].ingredientes;
          seo=msgTblProductoYDetalles.datos[i].seo;
          activadoGeneral=msgTblProductoYDetalles.datos[i].activadoGeneral;
          idtblcategproduct=msgTblProductoYDetalles.datos[i].idtblcategproduct;
          idtblclasifproduct=msgTblProductoYDetalles.datos[i].idtblclasifproduct;

          idProductoDetalle=msgTblProductoYDetalles.datos[i].idProductoDetalle;
          diasElaboracion=msgTblProductoYDetalles.datos[i].diaselaboracion;
          stock=msgTblProductoYDetalles.datos[i].stock;
          precioreal=msgTblProductoYDetalles.datos[i].precioreal;
          diamentro=msgTblProductoYDetalles.datos[i].diamentro;
          largo=msgTblProductoYDetalles.datos[i].largo;
          ancho=msgTblProductoYDetalles.datos[i].ancho;
          piezas=msgTblProductoYDetalles.datos[i].piezas;
          activado =msgTblProductoYDetalles.datos[i].activado;
          nombreIngrediente=msgTblProductoYDetalles.datos[i].nombreIngrediente          
          arregloMostrarimagen.push(idProducto);

          //TBLPRODUCTODETALLE
          arregloInfoUnProducto.push(idProducto);
          arregloInfoUnProducto.push(nombre);
          arregloInfoUnProducto.push(idProductoDetalle);
          arregloInfoUnProducto.push(diasElaboracion);          
          arregloInfoUnProducto.push(stock);
          arregloInfoUnProducto.push(precioreal);
          arregloInfoUnProducto.push(diamentro);
          arregloInfoUnProducto.push(largo);
          arregloInfoUnProducto.push(ancho);
          arregloInfoUnProducto.push(piezas);
          arregloInfoUnProducto.push(activado);
          arregloInfoUnProducto.push(nombreIngrediente);

          //TBLPRODUCTO
          arregloInfoUnProducto.push(descripcion);
          arregloInfoUnProducto.push(ingredientes);
          arregloInfoUnProducto.push(seo);
          arregloInfoUnProducto.push(activadoGeneral);
          arregloInfoUnProducto.push(idtblcategproduct);
          arregloInfoUnProducto.push(idtblclasifproduct);

          //SE AGREGA AL ARREGLO QUE TANDRA A TODOS LOS PRODUCTOS Y LIMPIAMOS EL ARREGLO arregloInfoUnProducto PARA EL SIGUIENTE PRODUCTO
          arregloInfoTodosProducto.push(arregloInfoUnProducto);
          arregloInfoUnProducto=[];

          if(diamentro!=null)
            productdetalle_size=diamentro+' diametro';
          else if(largo!=null)
            productdetalle_size=largo+" x "+ancho+' largo/ancho';
          else if(piezas!="")
            productdetalle_size=piezas+' piezas';
          productoAcitvado=verificarActivoProducto(idProductoDetalle,activado); 
          ProductoJS=productosPlantilla2(idexArreglo,idProducto,idProductoDetalle,nombre,stock,productdetalle_size,productoAcitvado);
          //LANZA LA PLANTILLA AL DOM
          $("#productoslineaPlantilla").append(ProductoJS);
          

        });
    }
        boton_nuevoproductolinea=agregarProductoPlantilla(); 
        $("#productoslineaPlantilla").append(boton_nuevoproductolinea);
        arregloMostrarimagen.forEach(function (item, index, array) {
            //INICIO IMG
          $.ajax({  method: "POST", dataType: "json",  url: "./../../controllers/getAllTblproductImgProducto.php",  data: {solicitadoBy:"WEB",idtblproducto:item}  })
            .done(function( msgTblProductoImg ) {
              //AGREGAMOS EL ID DEL PRODUCTO
              arregloImagenesUnProducto.push(item);        
              $.each(msgTblProductoImg.datos, function(i,item){
                
                productoImagen=PRODUCTOSIMGSRC+msgTblProductoImg.datos[i].tblproductimg_srcimg;

                tblproductimg_idproducto=msgTblProductoImg.datos[i].tblproducto_idtblproducto;

                imgSrcProductoLinea="imagenPortadaProductoLinea"+tblproductimg_idproducto;
                //AGREGAMOS LAS IMAGENES DE ESE PRODUCTO
                arregloImagenesUnProducto.push(productoImagen);

                //LANZAMOS LA PRIMERA IMAGEN DEL PRODUCTO
                if(i==0)                              
                  $("[name="+imgSrcProductoLinea+"]").attr("src",productoImagen);
                
                //return false;
              });
              //SE AGREGA AL ARREGLO QUE TANDRA A TODOS LAS IMAGENES DE TODOS LOS PRODUCTOS Y LIMPIAMOS EL ARREGLO arregloImagenesUnProducto PARA EL SIGUIENTE PRODUCTO
              arregloImagenesTodosProducto.push(arregloImagenesUnProducto);
              arregloImagenesUnProducto=[];
            })
            .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
            .always(function(){  /*console.log("always");*/ });
            //FIN IMG


        });
          
      })
      .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/ });

      //PRODUCTOS COTIZADOR
      $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblproductcotizador.php",  data: {solicitadoBy:"WEB",idtblproveedor:"1"}  })
        .done(function( msgTblProductoCotizador ) {
          if(msgTblProductoCotizador.datos!="Hubo algun error, vuelve a intentarlo WEB")
        {
          //console.log('entro a msgTblProductoCotizador');
          $.each(msgTblProductoCotizador.datos, function(i,item){
            //console.log('tiene iunfor entro al each');
            indexArregloCotizador=i;
            idProductoCotizador=msgTblProductoCotizador.datos[i].idtblproductcotizador;
            nombreCotizador=msgTblProductoCotizador.datos[i].tblproductcotizador_nombre;
            descripcionCotizador=msgTblProductoCotizador.datos[i].tblproductcotizador_descripcion;
            ingredienteCotizador=msgTblProductoCotizador.datos[i].tblproductcotizador_ingrediente;
            promcalificacionCotizador=msgTblProductoCotizador.datos[i].tblproductcotizador_promcalificacion;
            diaselaboracionCotizador=msgTblProductoCotizador.datos[i].tblproductcotizador_diaselaboracion;
            activadoCotizador=msgTblProductoCotizador.datos[i].tblproductcotizador_activado;
            idtbleventoCotizador=msgTblProductoCotizador.datos[i].tblevento_idtblevento;
            idtblproveedorCotizador=msgTblProductoCotizador.datos[i].tblproveedor_idtblproveedor;

            arregloMostrarimagenCotizador.push(idProductoCotizador);

            //console.log('final indexArreglo::'+indexArregloCotizador+' idProducto::'+idProductoCotizador+' nombre::'+nombreCotizador+' descripcion::'+descripcionCotizador+' ingrediente::'+ingredienteCotizador+' promcalificacion::'+promcalificacionCotizador+' diaselaboracion::'+diaselaboracionCotizador+' activo::'+activadoCotizador+' idtblevento::'+idtbleventoCotizador+' idtblproveedor::'+idtblproveedorCotizador);
                                
            //arregloMostrarimagen.push(idProducto);

            //TBLPRODUCTOCOTIZADOR
            
            arregloInfoUnProductoCotizador.push(idProductoCotizador);
            arregloInfoUnProductoCotizador.push(nombreCotizador);
            arregloInfoUnProductoCotizador.push(descripcionCotizador);
            arregloInfoUnProductoCotizador.push(ingredienteCotizador);
            arregloInfoUnProductoCotizador.push(promcalificacionCotizador);
            arregloInfoUnProductoCotizador.push(diaselaboracionCotizador);
            arregloInfoUnProductoCotizador.push(activadoCotizador);
            arregloInfoUnProductoCotizador.push(idtbleventoCotizador);
            arregloInfoUnProductoCotizador.push(idtblproveedorCotizador);
            

            
            //SE AGREGA AL ARREGLO QUE TANDRA A TODOS LOS PRODUCTOS Y LIMPIAMOS EL ARREGLO arregloInfoUnProducto PARA EL SIGUIENTE PRODUCTO
            arregloInfoTodosProductoCotizador.push(arregloInfoUnProductoCotizador);
            arregloInfoUnProductoCotizador=[];

            
             
            //productoAcitvadoCotizador=verificarActivoProductoCotizador(idProductoCotizador,activoCotizador);
            nombreCheckBox="product_edit_active_control_prod_cotizador"+idProductoCotizador;   
            productoAcitvado='<input type="checkbox" data-switchery checked name="product_edit_active_control_prod_cotizador" id="'+nombreCheckBox+'" onclick="activarProducto('+nombreCheckBox+','+idProductoCotizador+')"/>';
            productoAcitvadoCotizador=productoAcitvado
            ProductoJS=productosPlantillaCotizador(indexArregloCotizador,idProductoCotizador,nombreCotizador,productoAcitvadoCotizador);
            //LANZA LA PLANTILLA AL DOM
            $("#productoscotizadorPlantilla").append(ProductoJS);
            

          });
          }
          boton_nuevoproductoCotizador=agregarProductoPlantillaCotizador(); 
            $("#productoscotizadorPlantilla").append(boton_nuevoproductoCotizador);
           //INICIO COTIZADOR IMG
          arregloMostrarimagenCotizador.forEach(function (item, index, array) {
             
            $.ajax({  method: "POST", dataType: "json",  url: "./../../controllers/getAllTblproductcotimg.php",  data: {solicitadoBy:"WEB",idtblproductcotizador:item}  })
              .done(function( msgTblProductoCotizadorImg ) {
                //AGREGAMOS EL ID DEL PRODUCTO
                arregloImagenesUnProductoCotizador.push(item);        
                $.each(msgTblProductoCotizadorImg.datos, function(i,item){
                  
                  productoCotizadorImagen=PRODUCTOSIMGCOTIZADORSRC+msgTblProductoCotizadorImg.datos[i].tblproductcotimg_srcimg;

                  tblproductcotizador_idtblproductcotizador=msgTblProductoCotizadorImg.datos[i].tblproductcotizador_idtblproductcotizador;

                  imgSrcProductoCotizador="imagenPortadaProductoCotizador"+tblproductcotizador_idtblproductcotizador;
                  //AGREGAMOS LAS IMAGENES DE ESE PRODUCTO
                  arregloImagenesUnProductoCotizador.push(productoCotizadorImagen);
                  //LANZAMOS LA PRIMERA IMAGEN DEL PRODUCTO
                  if(i==0)                              
                    $("[name="+imgSrcProductoCotizador+"]").attr("src",productoCotizadorImagen);
                  
                  //return false;
                });
                //SE AGREGA AL ARREGLO QUE TANDRA A TODOS LAS IMAGENES DE TODOS LOS PRODUCTOS Y LIMPIAMOS EL ARREGLO arregloImagenesUnProducto PARA EL SIGUIENTE PRODUCTO
                
                arregloImagenesTodosProductoCotizador.push(arregloImagenesUnProductoCotizador);
                arregloImagenesUnProductoCotizador=[];

              })
              .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
              .always(function(){   });          
          });
          //FIN IMG
          
            
        })
        .fail(function( jqXHR, textStatus ) {  console.log("getAllTblproductcotizador fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){
          //console.log("getAllTblproductcotizador  always"); 
        });
      ///////////////////////////////////////////////////////////////////////////////////////////////////////
      //PRODUCTOS COMPLEMETARIO
      $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblproductcomplemOfProveedor.php",  data: {solicitadoBy:"WEB",idtblproveedor:"1"}  })
        .done(function( msgTblProductoComplementario ) {
          //console.log('entro a msgTblProductoComplementario');
          
          if(msgTblProductoComplementario.datos!="Hubo algun error, vuelve a intentarlo WEB")
        {   
          $.each(msgTblProductoComplementario.datos, function(i,item){
            //console.log('tiene iunfor entro al each');
            indexArregloComplementario=i;
            idProductoComplementario=msgTblProductoComplementario.datos[i].idtblproductcomplem;
            nombreComplementario=msgTblProductoComplementario.datos[i].tblproductcomplem_nombre;
            descripcionComplementario=msgTblProductoComplementario.datos[i].tblproductcomplem_descripcion;
            seoComplementario=msgTblProductoComplementario.datos[i].tblproductcomplem_seo;
            precioRealComplementario=msgTblProductoComplementario.datos[i].tblproductcomplem_precioreal;
            srcimgComplementario=msgTblProductoComplementario.datos[i].tblproductcomplem_srcimg;
            activadoComplementario=msgTblProductoComplementario.datos[i].tblproductcomplem_activado;
            idtblproveedorComplementario=msgTblProductoComplementario.datos[i].tblproveedor_idtblproveedor;
            stockComplementario=msgTblProductoComplementario.datos[i].tblproductcomplem_stock;

            arregloMostrarimagenComplementario.push(idProductoComplementario);

            //console.log('final indexArreglo::'+indexArregloComplementario+' idProducto::'+idProductoComplementario+' nombre::'+nombreComplementario+' descripcion::'+descripcionComplementario+' seo::'+seoComplementario+' precioreal::'+precioRealComplementario+' srcimg::'+srcimgComplementario+' activado::'+activadoComplementario+' idtblproveedor::'+idtblproveedorComplementario+' stock::'+stockComplementario);
                                
            //arregloMostrarimagen.push(idProducto);

            //TBLPRODUCTOComplementario
            
            arregloInfoUnProductoComplementario.push(idProductoComplementario);
            arregloInfoUnProductoComplementario.push(nombreComplementario);
            arregloInfoUnProductoComplementario.push(descripcionComplementario);
            arregloInfoUnProductoComplementario.push(seoComplementario);
            arregloInfoUnProductoComplementario.push(precioRealComplementario);
            arregloInfoUnProductoComplementario.push(srcimgComplementario);
            arregloInfoUnProductoComplementario.push(activadoComplementario);
            arregloInfoUnProductoComplementario.push(idtblproveedorComplementario);
            arregloInfoUnProductoComplementario.push(stockComplementario);

            
            //SE AGREGA AL ARREGLO QUE TANDRA A TODOS LOS PRODUCTOS Y LIMPIAMOS EL ARREGLO arregloInfoUnProducto PARA EL SIGUIENTE PRODUCTO
            arregloInfoTodosProductoComplementario.push(arregloInfoUnProductoComplementario);
            arregloInfoUnProductoComplementario=[];

            
             
            //productoAcitvadoComplementario=verificarActivoProductoComplementario(idProductoComplementario,activoComplementario);
            nombreCheckBox="product_edit_active_control_prod_Complementario"+idProductoComplementario;   
            productoAcitvado='<input type="checkbox" data-switchery checked name="product_edit_active_control_prod_Complementario" id="'+nombreCheckBox+'" onclick="activarProducto('+nombreCheckBox+','+idProductoComplementario+')"/>';
            productoAcitvadoComplementario=productoAcitvado
            ProductoJS=productosPlantillaComplementario(indexArregloComplementario,idProductoComplementario,nombreComplementario,activadoComplementario,srcimgComplementario);
            //LANZA LA PLANTILLA AL DOM
            $("#productosComplementarioPlantilla").append(ProductoJS);
            

          });          
           }   
            boton_nuevoproductoComplementario=agregarProductoPlantillaComplementario(); 
            $("#productosComplementarioPlantilla").append(boton_nuevoproductoComplementario);
        })
        .fail(function( jqXHR, textStatus ) {  console.log("getAllTblproductComplementario fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){
          //console.log("getAllTblproductComplementario  always"); 
        });
  }
  /*
  Funcion para geenerar el cuadro donde se muestran los productos
   */
  function productosPlantilla2(idexArreglo,idProducto,idProductoDetalle,nombre,stock,productdetalle_size,activado){
    nombre = nombre.replace(' ', '_');
    mensajeEliminacion="'Realmente deseas eliminar el producto?'";
    ProductoJS='<div data-product-name="P2"><div class="md-card md-card-hover-img"><div class="md-card-head uk-text-center uk-position-relative"><img name="imagenPortadaProductoLinea'+idProducto+'" class="md-card-head-img" src="./../assests_general/productos/linea/" alt=""/></div><div class="md-card-content"><ul class="md-list"><li><div class="md-list-content"><h4 class="heading_c uk-margin-bottom">'+nombre+'</h4></div></li><li><div id="boton_status_activado'+idProductoDetalle+'" class="uk-float-right">'+activado+'</div><label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Activo</label></li> <li><label class="md-list-heading">Tama? : </label><div id="sizeProductoLinea'+idProductoDetalle+'" class="uk-float-right"><p class="uk-text-small uk-text-muted">'+productdetalle_size+'</p></div></li><li><label class="md-list-heading">Caract. Especifica : </label><div class="uk-float-right"><label class="uk-text-small uk-text-muted">Sin Azucar</label></div></li><li><div class="md-list-content-horizontal"> <label class="md-list-heading">Stock</label><div class="uk-float-right"><input id="numeric_stockProductoLinea'+idProductoDetalle+'" class="uk-form-width-small" type="number"  min="0" max="100" step="1" value='+stock+' onblur="actualizarStockProductoLinea('+idProductoDetalle+')" onclick="actualizarStockProductoLinea('+idProductoDetalle+')"/></div> </div></li>    <li><div> <button type="button" class="md-btn md-btn-small" onclick=" UIkit.modal.confirm('+mensajeEliminacion+', function(){ eliminarProductoLinea('+idProducto+','+idProductoDetalle+'); });  ">Eliminar</button>  <button type="button" class="md-btn md-btn-small" data-uk-modal="{target:popup_modificarproductolinea}" onclick="modificarProductoLinea('+idexArreglo+','+idProducto+','+idProductoDetalle+','+idProductoDetalle+')">Modificar</button>   </div></li>      </ul></div></div></div>';  
      return ProductoJS
   }
  function productosPlantillaCotizador(idexArreglo,idProducto,nombre,activado){
    nombre = nombre.replace(' ', '_');
    mensajeEliminacion="'Realmente deseas eliminar el producto?'";
    ProductoJS='<div data-product-name="P2"><div class="md-card md-card-hover-img"><div class="md-card-head uk-text-center uk-position-relative"><img id="imagenPortadaProductoCotizador'+idProducto+'" name="imagenPortadaProductoCotizador'+idProducto+'" class="md-card-head-img" src="./../assests_general/productos/cotizador/" alt=""/></div><div class="md-card-content"><ul class="md-list"><li><div class="md-list-content"><h4 class="heading_c uk-margin-bottom">'+nombre+'</h4></div></li><li><div id="boton_status_activado'+idProducto+'" class="uk-float-right">'+activado+'</div><label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Activo</label></li>  <li><div> <button type="button" class="md-btn md-btn-small" onclick="UIkit.modal.confirm('+mensajeEliminacion+', function(){ eliminarProductoCotizador('+idProducto+'); }); ">Eliminar</button>  <button type="button" class="md-btn md-btn-small" data-uk-modal="{target:popup_modificarproductocotizador}" onclick="modificarProductoCotizaor('+idexArreglo+','+idProducto+','+idProducto+')">Modificar</button>   </div></li>      </ul></div></div></div>';  
      return ProductoJS
  }
  function productosPlantillaComplementario(idexArreglo,idProducto,nombre,activado,srcimgComplementario){
    nombre = nombre.replace(' ', '_');
    mensajeEliminacion="'Realmente deseas eliminar el producto?'";
    ProductoJS='<div data-product-name="P2"><div class="md-card md-card-hover-img"><div class="md-card-head uk-text-center uk-position-relative"><img id="imagenPortadaProductoComplementario'+idProducto+'" name="imagenPortadaProductoComplementario'+idProducto+'" class="md-card-head-img" src="./../assests_general/productos/complementario/'+srcimgComplementario+'" alt=""/></div><div class="md-card-content"><ul class="md-list"><li><div class="md-list-content"><h4 class="heading_c uk-margin-bottom">'+nombre+'</h4></div></li><li><div id="boton_status_activado'+idProducto+'" class="uk-float-right">'+activado+'</div><label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Activo</label></li>  <li><div> <button type="button" class="md-btn md-btn-small" onclick=" UIkit.modal.confirm('+mensajeEliminacion+', function(){ eliminarProductoComplementario('+idProducto+'); }); ">Eliminar</button>  <button type="button" class="md-btn md-btn-small" data-uk-modal="{target:popup_modificarproductoComplementario}" onclick="modificarProductoComplementario('+idexArreglo+','+idProducto+','+idProducto+')">Modificar</button>   </div></li>      </ul></div></div></div>';  
      return ProductoJS
  }
  function llamarFuncion(idProducto){
    UIkit.modal.confirm('Are you sure?', function(){ UIkit.modal.alert('Confirmed!'); });
  }
  /*
  genera un cuadro de a?dir productos 
   */
  function agregarProductoPlantilla(){
    boton_nuevoproductolinea='<div data-product-name="agregarproductolinea">        <div class="uk-badge md-card ">          <div class="md-card-content uk-border-circle">            <div class="uk-text-center uk-border-circle"> <h3>Agregar un producto nuevo</h3>            <button id="agregar" type="button" class="md-btn md-btn-flat md-btn-small uk-border-circle" data-uk-modal="{target:popup_nuevoproductolinea}">                <label class="menu_icon"><i class="material-icons md-48">&#xE145;</i></label>              </button>            </div>          </div>        </div></div>';
    return boton_nuevoproductolinea;
  }

  function agregarProductoPlantillaCotizador(){
    boton_nuevoproductoCotizador='<div data-product-name="agregarproductoCotizador">        <div class="uk-badge md-card ">          <div class="md-card-content uk-border-circle">            <div class="uk-text-center uk-border-circle"> <h3>Agregar un producto para cotizar nuevo</h3>            <button id="agregar" type="button" class="md-btn md-btn-flat md-btn-small uk-border-circle" data-uk-modal="{target:popup_nuevoproductocotizador}">                <label class="menu_icon"><i class="material-icons md-48">&#xE145;</i></label>              </button>            </div>          </div>        </div></div>';
    return boton_nuevoproductoCotizador;
  }

  function agregarProductoPlantillaComplementario(){
    boton_nuevoproductoComplementario='<div data-product-name="agregarproductoComplementario">        <div class="uk-badge md-card ">          <div class="md-card-content uk-border-circle">            <div class="uk-text-center uk-border-circle"> <h3>Agregar un producto complementario nuevo</h3>            <button id="agregar" type="button" class="md-btn md-btn-flat md-btn-small uk-border-circle" data-uk-modal="{target:popup_nuevoproductoComplementario}">                <label class="menu_icon"><i class="material-icons md-48">&#xE145;</i></label>              </button>            </div>          </div>        </div></div>';
    return boton_nuevoproductoComplementario;
  }

  /*
  Funcionp para validar si los productos estan activados
   */
  function verificarActivoProducto(idProductoDetalle,tblproducto_activado)
  {
    nombreCheckBox="product_edit_active_control_prod_linea"+idProductoDetalle;
    if(tblproducto_activado==1)
      productoAcitvado='<input type="checkbox" data-switchery checked name="product_edit_active_control_prod_linea" id="'+nombreCheckBox+'" onclick="activarProducto('+nombreCheckBox+','+idProductoDetalle+')"/>';
    else if(tblproducto_activado==0)
      productoAcitvado='<input type="checkbox" data-switchery name="product_edit_active_control" id="'+nombreCheckBox+'" onclick="activarProducto('+nombreCheckBox+','+idProductoDetalle+')"/>';
    else
      productoAcitvado='<input type="checkbox" data-switchery name="product_edit_active_control" id="'+nombreCheckBox+'" onclick="activarProducto('+nombreCheckBox+','+idProductoDetalle+')"/>';
    return productoAcitvado;
  }
  function verificarActivoProductoCotizador(idProducto,tblproducto_activado)
  {
    nombreCheckBox="product_edit_active_control_prod_cotizador"+idProducto;
    if(tblproducto_activado==1)
      productoAcitvado='<input type="checkbox" data-switchery checked name="product_edit_active_control_prod_cotizador" id="'+nombreCheckBox+'" onclick="activarProducto('+nombreCheckBox+','+idProducto+')"/>';
    else if(tblproducto_activado==0)
      productoAcitvado='<input type="checkbox" data-switchery name="product_edit_active_control" id="'+nombreCheckBox+'" onclick="activarProducto('+nombreCheckBox+','+idProducto+')"/>';
    else
      productoAcitvado='<input type="checkbox" data-switchery name="product_edit_active_control" id="'+nombreCheckBox+'" onclick="activarProducto('+nombreCheckBox+','+idProducto+')"/>';
    return productoAcitvado;
  }
  function dePrueba(event)
  {
     $('#nombreEliminarH3').text('dePrueba'+event);   
  }
  function activarProducto(checkboxAActivar,idProductoDetalle)
  {
    emailUsuarioLogin='miguel@bepickler.com22';
    if(checkboxAActivar.checked){
      activado=1;       
    }else{
      activado=0;
    }
    //INICIO AJAX ACTIVAR PRODUCTO
    $.ajax({  method: "POST", dataType: "json",  url: "./../../controllers/setUpdateTblproductDetalleActivar.php",  data: {solicitadoBy:"WEB",idtblproductdetalle:idProductoDetalle,activado:activado,emailusuamodifico:emailUsuarioLogin}  })
      .done(function( msgTblproductDetalle ) {        
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setUpdateTblproductDetalleActivar fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/ });
    //FIN AJAX ACTIVAR PRODUCTO
  }
  function activarProductoCotizador(checkboxAActivar,idProducto)
  {
    emailUsuarioLogin='miguel@bepickler.com22';
    if(checkboxAActivar.checked){
      activado=1;       
    }else{
      activado=0;
    }
    //INICIO AJAX ACTIVAR PRODUCTO
    $.ajax({  method: "POST", dataType: "json",  url: "./../../controllers/setUpdateTblproductDetalleActivar.php",  data: {solicitadoBy:"WEB",idtblproductdetalle:idProducto,activado:activado,emailusuamodifico:emailUsuarioLogin}  })
      .done(function( msgTblproductDetalle ) {        
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setUpdateTblproductDetalleActivar fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/ });
    //FIN AJAX ACTIVAR PRODUCTO
  }
  function actualizarStockProductoLinea(idProductoDetalle){
    stock=$('#numeric_stockProductoLinea'+idProductoDetalle).val();
    emailUsuarioLogin='miguel@bepickler.com22';
    $.ajax({  method: "POST", dataType: "json",  url: "./../../controllers/setUpdateTblproductDetalleStock.php",  data: {solicitadoBy:"WEB",idtblproductdetalle:idProductoDetalle,stock:stock,emailusuamodifico:emailUsuarioLogin}  })
      .done(function( msgTblproductDetalle ) {        
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setUpdateTblproductDetalleStock fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/ });
  }
  function registrarProductoLinea(){  
    /*
    VARIABLES
     */
    //tblproducto
    nombreproduct='';
    descripcion='';
    ingredientes='';
    seo='';
    promcalif='';
    activado='';
    idtblproveedor='';
    idtblcategproduc='';
    idtblclasifproduct='';
    emailcreo='';

    //productoimg
    srcimg1='';
    srcimg2='';
    srcimg3='';
    idtblproducto='';
    emailcreo='';

    //productodetalle
    diaselaboracion='';
    stock='';
    precioreal='';
    preciobp='';
    diametro='';
    largo='';
    ancho='';
    porciones='';
    piezas='';
    activado='';
    idtblespecifingrediente='';
    idtblproducto='';
    emailcreo='';
    /*
    ASINGACION DE VALORES
     */
    nombreproduct=$('#alta_nombre_producto_linea').val();
    descripcion=$('#alta_descripcion_producto_linea').val();
    ingredientes=$('#alta_ingredientes_producto_linea').val();
    seo=$('#alta_seo_producto_linea').val();
    promcalif='5';
    activado=$('#alta_activado_producto_linea').val();
    if(activado=='on'){activado=1;}
    idtblproveedor='1';
    idtblcategproduc=$('#alta_categoria_producto_linea').val();
    idtblclasifproduct=$('#alta_clasificacion_producto_linea').val();
    emailcreo='miguel@bepickler.com';

    srcimg1=$('#alta_srcimg1_producto_linea').val().replace(/C:\\fakepath\\/i, '');
    srcimg2=$('#alta_srcimg2_producto_linea').val().replace(/C:\\fakepath\\/i, '');
    srcimg3=$('#alta_srcimg3_producto_linea').val().replace(/C:\\fakepath\\/i, '');

    //alert('imagnees srcimg1::'+srcimg1+' srcim2'+srcimg2+' srcimg3'+srcimg3);

    diaselaboracion=$('#alta_detalle_diasElborar_producto_linea').val();
    stock=$('#alta_detalle_stock_producto_linea').val();
    precioreal=$('#alta_detalle_precioreal_producto_linea').val();

    preciobp=precioreal;
    diametro=$('#alta_clasifcategproduct_circular_diametro_producto_linea').val();
    largo=$('#alta_clasifcategproduct_cuadrado_largo_producto_linea').val();
    ancho=$('#alta_clasifcategproduct_cuadrado_ancho_producto_linea').val();
    piezas=$('#alta_clasifcategproduct_piezas_producto_linea').val();
    activado=1;
    idtblespecificingrediente=$('#alta_especificingredientes_producto_linea').val();
    if(diametro!=''){
      porciones=Math.round((Math.PI*diametro)/2);
      largo='';
      ancho='';
      piezas='';
    }
    else if(largo!=''&&ancho!=''){
      porciones=largo*ancho/2*5;
      diametro='';
      piezas='';
    }
    else if(piezas!=''){
      porciones=piezas;
      largo='';
      ancho='';
      diametro='';
    }

    var arreglo= new Array();
    arreglo.push(nombreproduct);
    arreglo.push(descripcion);
    arreglo.push(ingredientes);
    arreglo.push(seo);
    arreglo.push(promcalif);
    arreglo.push(activado);
    arreglo.push(idtblproveedor);
    arreglo.push(idtblcategproduc);
    arreglo.push(idtblclasifproduct);
    arreglo.push(emailcreo);
    
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproducto.php",  data: {solicitadoBy:"WEB",nombreproduct:nombreproduct,descripcion:descripcion,ingredientes:ingredientes,seo:seo,promcalif:promcalif,activado:activado,idtblproveedor:idtblproveedor,idtblcategproduc:idtblcategproduc,idtblclasifproduct:idtblclasifproduct,emailcreo:emailcreo}  })
      .done(function( msgTblProducto ) {
        /////////////////////////////////////////////////////////////////////////
        $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getTblproductoId.php",  data: {solicitadoBy:"WEB",nombreproduct:nombreproduct,descripcion:descripcion,ingredientes:ingredientes,seo:seo,promcalif:promcalif,activado:activado,idtblproveedor:idtblproveedor,idtblcategproduc:idtblcategproduc,idtblclasifproduct:idtblclasifproduct,emailcreo:emailcreo}  })
          .done(function( msgTblProductoId ) {
            idtblproducto=msgTblProductoId.datos[0].idtblproducto;
            /////////////////////////////////////////////////////////////////////]
            //imagenes
            //personalizar el nombre del producto
            srcimg1='p_'+idtblproducto+'_'+srcimg1;
            srcimg2='p_'+idtblproducto+'_'+srcimg2;
            srcimg3='p_'+idtblproducto+'_'+srcimg3;
            //alert('Id unico imagnees srcimg1::'+srcimg1+' srcim2'+srcimg2+' srcimg3'+srcimg3);
            //PARA ONTEBER EL ID MANDAR AL MODAL EL ID DE LAS IMAGNEE JUNTO CON LAS IMAGNES Y DESPUS BTENERLO Y SOLO ASIGANRALO 
            $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductImg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg1,idtblproducto:idtblproducto,emailcreo:emailcreo}  })
              .done(function( msgTblProductoImg1 )
              {
                //console.log('msgTblProductoImg1.datos::'+msgTblProductoImg1.datos);
                srcimg1=$('#alta_srcimg1_producto_lineaBD').val(msgTblProductoImg1.datos);
                $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductImg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg2,idtblproducto:idtblproducto,emailcreo:emailcreo}  })
                  .done(function( msgTblProductoImg2 )
                  {
                    //console.log('msgTblProductoImg2.datos::'+msgTblProductoImg2.datos);
                    srcimg2=$('#alta_srcimg2_producto_lineaBD').val(msgTblProductoImg2.datos); 
                     $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductImg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg3,idtblproducto:idtblproducto,emailcreo:emailcreo}  })
                      .done(function( msgTblProductoImg3 )
                      {
                        //console.log('msgTblProductoImg3.datos::'+msgTblProductoImg3.datos);
                        srcimg3=$('#alta_srcimg3_producto_lineaBD').val(msgTblProductoImg3.datos);
                        //mandamos el fom para subir las imagenes al servidor
                        var formData = new FormData($("#altaproducto")[0]);
                        var ruta = "imagen-ajax.php";
                        $.ajax({  method: "POST",  url: "uploadImgProductoLinea.php",  data: formData ,contentType: false,
                        processData: false, })
                          .done(function( datos )
                          {
                            //alert('done uploadImgProductoLinea datos::'+datos);
                            //$('#productoslineaPlantilla').html("");
                            $('#productosComplementarioPlantilla').html("");
                            $('#productoscotizadorPlantilla').html("");
                            $('#productoslineaPlantilla').html("");
                            $('#altaproducto')[0].reset();
                            cargarValoresDefault();
                            UIkit.modal("#popup_nuevoproductolinea").hide();
                            UIkit.modal.alert('Producto Registrado');
                          })
                          .fail(function( jqXHR, textStatus ) {  console.log("uploadImgProductoLinea fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                          .always(function(){  /*console.log("always");*/ });                         
                      })
                      .fail(function( jqXHR, textStatus ) {  console.log("setTblproductImg fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                      .always(function(){  /*console.log("always");*/ }); 
                  })
                  .fail(function( jqXHR, textStatus ) {  console.log("setTblproductImg fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                  .always(function(){  /*console.log("always");*/ });
                // ejecutar el ajax de subida pero cuando se pida el mombre en el php consultar el nombre en la bd y asigarlo  
                
              })
              .fail(function( jqXHR, textStatus ) {  console.log("setTblproductImg IMG fail jqXHR::"+jqXHR+" IMG textStatus::"+textStatus);  })
              .always(function(){  /*console.log("always");*/ });
           
            //producto detalles
            $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductDetalle.php",  data: {solicitadoBy:"WEB",diaselaboracion:diaselaboracion,stock:stock,precioreal:precioreal,preciobp:preciobp,diametro:diametro,largo:largo,ancho:ancho,piezas:piezas,activado:activado,porciones:porciones,idtblespecificingrediente:idtblespecificingrediente,idtblproducto:idtblproducto,emailcreo:emailcreo}  })
              .done(function( msgTblProductoDetalle )
              {
              })
              .fail(function( jqXHR, textStatus ) {  console.log("setTblproductDetalle fail detalle jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
              .always(function(){  /*console.log("always");*/ });
            /////////////////////////////////////////////////////////////////////
          })
          .fail(function( jqXHR, textStatus ) {  console.log("getTblproductoId fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
          .always(function(){  /*console.log("always");*/ });
        /////////////////////////////////////////////////////////////////////////
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setTblproducto fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/ });
      
  }
  //funcion agregar producto cotizador
  function registrarProductoCotizador(){  
    /*
    VARIABLES
     */
    //tblproducto
    nombreproduct='';
    descripcion='';
    ingrediente='';
    idtblevento='';
    promcalif='';
    activado='';
    idtblproveedor='';
    emailcreo='';
    //productoimg
    srcimg1='';
    srcimg2='';
    srcimg3='';
    idtblproducto='';
    emailcreo=''; 
    /*
    ASINGACION DE VALORES
     */
    nombreproduct=$('#alta_nombre_producto_cotizador').val();
    descripcion=$('#alta_descripcion_producto_cotizador').val();
    ingrediente=$('#alta_ingredientes_producto_cotizador').val();
    promcalif='5';
    activado=$('#alta_activado_producto_cotizador').val();
    if(activado=='on'){activado=1;}
    //SESSION
    idtblproveedor='1';
    ///////////////////
    idtblevento=$('#alta_evento_producto_cotizador').val();
    emailcreo='miguel@bepickler.com';

    srcimg1=$('#alta_srcimg1_producto_cotizador').val().replace(/C:\\fakepath\\/i, '');
    srcimg2=$('#alta_srcimg2_producto_cotizador').val().replace(/C:\\fakepath\\/i, '');
    srcimg3=$('#alta_srcimg3_producto_cotizador').val().replace(/C:\\fakepath\\/i, '');

    diaselaboracion=$('#alta_detalle_diasElborar_producto_cotizador').val();  
    
    var arreglo=[]
    arreglo.push(nombreproduct);
    arreglo.push(descripcion);
    arreglo.push(ingrediente);
    arreglo.push(promcalif);
    arreglo.push(diaselaboracion);
    arreglo.push(activado);
    arreglo.push(idtblevento);
    arreglo.push(idtblproveedor);
    arreglo.push(emailcreo);
     
    console.log('agergar: nombreproduct::'+nombreproduct+' descripcion::'+descripcion+' ingrediente::'+ingrediente+' promcalif::'+promcalif+' diaselaboracion::'+diaselaboracion+' activado::'+activado+' idtblproveedor::'+idtblproveedor+' idtblevento::'+idtblevento+' emailcreo+::'+emailcreo+' arreglo::'+arreglo.length+' srcimg1::'+srcimg1+' srcimg2::'+srcimg2+' srcimg3::'+srcimg3);
    
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductcotizador.php",  data: {solicitadoBy:"WEB",nombreproductcotizador:nombreproduct,descripcion:descripcion,ingrediente:ingrediente,promcalificacion:promcalif, diaselaboracion:diaselaboracion, activado:activado, idtblevento:idtblevento, idtblproveedor:idtblproveedor, emailcreo:emailcreo}  })
      .done(function( msgTblProducto ) {
        /////////////////////////////////////////////////////////////////////////
        $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getTblproductoCotizadorId.php",  data: {solicitadoBy:"WEB",nombreproductcotizador:nombreproduct,descripcion:descripcion,ingrediente:ingrediente,promcalificacion:promcalif, diaselaboracion:diaselaboracion, activado:activado, idtblevento:idtblevento, idtblproveedor:idtblproveedor, emailcreo:emailcreo}  })
          .done(function( msgTblProductoId ) {
            idtblproductcotizador=msgTblProductoId.datos[0].idtblproductcotizador;
            /////////////////////////////////////////////////////////////////////]
            //imagenes
            //personalizar el nombre del producto
            srcimg1='p_'+idtblproductcotizador+'_'+srcimg1;
            srcimg2='p_'+idtblproductcotizador+'_'+srcimg2;
            srcimg3='p_'+idtblproductcotizador+'_'+srcimg3;
            console.log('idtblproductcotizador::'+idtblproductcotizador+' srcimg1::'+srcimg1+' srcimg2::'+srcimg2+' srcimg3::'+srcimg3);
            
            //PARA ONTEBER EL ID MANDAR AL MODAL EL ID DE LAS IMAGNEE JUNTO CON LAS IMAGNES Y DESPUS BTENERLO Y SOLO ASIGANRALO 
            $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductcotimg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg1,idtblproductcotizador:idtblproductcotizador,emailcreo:emailcreo}  })
              .done(function( msgTblProductoImg1 )
              {
                console.log('msgTblProductoImg1.datos::'+msgTblProductoImg1.datos)
                srcimg1=$('#alta_srcimg1_producto_cotizadorBD').val(msgTblProductoImg1.datos);
                $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductcotimg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg2,idtblproductcotizador:idtblproductcotizador,emailcreo:emailcreo}  })
                  .done(function( msgTblProductoImg2 )
                  {
                    srcimg2=$('#alta_srcimg2_producto_cotizadorBD').val(msgTblProductoImg2.datos); 
                     $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductcotimg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg3,idtblproductcotizador:idtblproductcotizador,emailcreo:emailcreo}  })
                      .done(function( msgTblProductoImg3 )  
                      {
                        srcimg3=$('#alta_srcimg3_producto_cotizadorBD').val(msgTblProductoImg3.datos);
                        //mandamos el fom para subir las imagenes al servidor
                        var formData = new FormData($("#altaproductocotizador")[0]);
                        var ruta = "imagen-ajax.php";
                        $.ajax({  method: "POST",  url: "uploadImgProductoCotizador.php",  data: formData ,contentType: false,
                        processData: false, })
                          .done(function( datos )
                          {                            
                            //$('#productoscotizadorPlantilla').html("");
                            $('#productosComplementarioPlantilla').html("");
                            $('#productoscotizadorPlantilla').html("");
                            $('#productoslineaPlantilla').html("");
                            $('#altaproductocotizador')[0].reset();
                            UIkit.modal("#popup_nuevoproductocotizador").hide();
                            UIkit.modal.alert('Producto en Cotizador Registrado');
                            cargarValoresDefault();


                          })
                          .fail(function( jqXHR, textStatus ) {  console.log("uploadImgProductoCotizador fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                          .always(function(){ 
                           //console.log("always");
                            });                         
                      })
                      .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcotimg3 fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                      .always(function(){ 
                      //console.log("always");
                    }); 
                  })
                  .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcotimg2 fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                  .always(function(){  
                  console.log("always");
                   });
                // ejecutar el ajax de subida pero cuando se pida el mombre en el php consultar el nombre en la bd y asigarlo  
                
              })
              .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcotimg1 fail jqXHR::"+jqXHR+" IMG textStatus::"+textStatus);  })
              .always(function(){  
              //console.log("always");
               });
            /////////////////////////////////////////////////////////////////////
          })
          .fail(function( jqXHR, textStatus ) {  console.log("getTblproductoCotizadorId fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
          .always(function(){  
          //console.log("always");
        });
        /////////////////////////////////////////////////////////////////////////
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcotimg fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  
        //console.log("always");
       });
     
  }
  //funcion agregar producto cotizador
  function registrarProductoComplementario()
  {  
    /*
    VARIABLES
     */
    //tblproducto
    nombreproduct='';
    descripcion='';
    seo='';
    preciobp='';
    precioreal='';
    srcimg='';
    activado='';
    idProveedor='';
    stock=''; 
    /*
    ASINGACION DE VALORES
     */
    nombreproduct=$('#alta_nombre_producto_Complementario').val();
    descripcion=$('#alta_descripcion_producto_Complementario').val();
    seo=$('#alta_seo_producto_Complementario').val();
    precioreal=$('#alta_precioreal_producto_Complementario').val();
    preciobp=precioreal;
    activado=$('#alta_activado_producto_cotizador').val();
    if(activado=='on'){activado=1;}
    //SESSION
    idtblproveedor='1';
    ///////////////////
    emailcreo='miguel@bepickler.com';

    srcimg=$('#alta_srcimg1_producto_Complementario').val().replace(/C:\\fakepath\\/i, '');
    srcimg='p_'+idtblproveedor+'_'+srcimg;

    stock=$('#alta_stock_producto_Complementario').val();  
    
    var arreglo=[]
    arreglo.push(nombreproduct);
    arreglo.push(descripcion);
    arreglo.push(seo);
    arreglo.push(precioreal);
    arreglo.push(preciobp);
    arreglo.push(activado);
    arreglo.push(idtblproveedor);
    arreglo.push(stock);
    arreglo.push(emailcreo);
     
    console.log('agergar: nombreproduct::'+nombreproduct+' descripcion::'+descripcion+' seo::'+seo+' precioreal::'+precioreal+' activado::'+activado+' idtblproveedor::'+idtblproveedor+' stock::'+stock+' preciobp::'+preciobp+' emailcreo+::'+emailcreo+' arreglo::'+arreglo.length+' srcimg::'+srcimg);

    /*
    $solicitadoBy=$_POST["solicitadoBy"];
    $nombreproductcomplem=$_POST["nombreproductcomplem"];
    $descripcion=$_POST["descripcion"];
    $seo=$_POST["seo"];
    $precioreal=$_POST["precioreal"];
    $preciobp=$_POST["preciobp"];
    $srcimg=$_POST["srcimg"];
    $activado=$_POST["activado"];
    $idtblproveedor=$_POST["idtblproveedor"];
    $stock=$_POST["stock"];
    $emailcreo=$_POST["emailcreo"];
     */
    
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductcomplem.php",  data: {solicitadoBy:"WEB",nombreproductcomplem:nombreproduct,descripcion:descripcion,seo:seo,precioreal:precioreal, preciobp:preciobp, srcimg:srcimg, activado:activado, idtblproveedor:idtblproveedor, stock:stock, emailcreo:emailcreo}  })
      .done(function( msgTblProducto ) 
      {
        console.log('entro al done setTblproductcomplem::'+msgTblProducto);
        
        /////////////////////////////////////////////////////////////////////////
        $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getTblproductoComplementarioId.php",  data: {solicitadoBy:"WEB",nombreproductcomplem:nombreproduct,descripcion:descripcion,seo:seo,precioreal:precioreal, preciobp:preciobp, srcimg:srcimg, activado:activado, idtblproveedor:idtblproveedor, stock:stock, emailcreo:emailcreo}  })
          .done(function( msgTblProductoId ) {
              idtblproductcomplem=msgTblProductoId.datos[0].idtblproductcomplem;
            /////////////////////////////////////////////////////////////////////]
            //imagenes
            //personalizar el nombre del producto
            srcimg='i_'+  idtblproductcomplem+'_'+srcimg;
            //console.log(' idtblproductcomplem::'+  idtblproductcomplem+' srcimg::'+srcimg);
            /*
            //ACTUALIZAMOS EL NOMBRE DE LA IMAGEN CON EL ULTIMO FORMATO i_idProducto_p_proveedor_nombreImagen.jpg/gif/etc 
            */
            $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setUpdateTblproductcomplemImg.php",  data: {solicitadoBy:"WEB",idtblproductcomplem:idtblproductcomplem, srcimg: srcimg,emailmodifico:emailcreo}  })
              .done(function( msgTblProductoComplementarioImg )
              {
                //console.log('msgTblProductoComplementarioImg.datos::'+msgTblProductoComplementarioImg.datos)
                srcimg=$('#alta_srcimg1_producto_ComplementarioBD').val(srcimg);
                  //mandamos el fom para subir las imagenes al servidor
                  
                  var formData = new FormData($("#altaproductoComplementario")[0]);
                  var ruta = "imagen-ajax.php";
                  
                  $.ajax({  method: "POST",  url: "uploadImgProductoComplementario.php",  data: formData ,contentType: false,
                  processData: false, })
                    .done(function( datos )
                    {
                      //console.log('uploadImgProductoCotizador dice::'+datos);
                      $('#productosComplementarioPlantilla').html("");
                      $('#productoscotizadorPlantilla').html("");
                      $('#productoslineaPlantilla').html("");
                      $('#altaproductoComplementario')[0].reset();
                      UIkit.modal("#popup_nuevoproductoComplementario").hide();
                      UIkit.modal.alert('Producto Complementario Registrado');
                      cargarValoresDefault();
                    })
                    .fail(function( jqXHR, textStatus ) {  console.log("uploadImgProductoComplementario fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                    .always(function(){ 
                     //console.log("always");
                    });
                    
                  // ejecutar el ajax de subida pero cuando se pida el mombre en el php consultar el nombre en la bd y asigarlo  
              })
              .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcotimg1 fail jqXHR::"+jqXHR+" IMG textStatus::"+textStatus);  })
              .always(function(){  
              //console.log("always");
               });
              
            /////////////////////////////////////////////////////////////////////
          })
          .fail(function( jqXHR, textStatus ) {  console.log("getTblproductoComplementarioId fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
          .always(function(){  
          //console.log("always");
        });
        /////////////////////////////////////////////////////////////////////////
        
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcomplem fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  
        //console.log("always");
       });
     
  }
  //function modificarProductoLinea(idProducto,idProductoDetalle,nombre,stock,productdetalle_size){
  function modificarProductoLinea(idexArreglo,idProducto,idProductoDetalle,nombre){
    /**
     //TBLPRODUCTODETALLE
        0  arregloInfoUnProducto.push(idProducto);
        1  arregloInfoUnProducto.push(nombre);
        2  arregloInfoUnProducto.push(idProductoDetalle);
        3  arregloInfoUnProducto.push(diasElaboracion);          
        4  arregloInfoUnProducto.push(stock);
        5  arregloInfoUnProducto.push(precioreal);
        6  arregloInfoUnProducto.push(diamentro);
        7  arregloInfoUnProducto.push(largo);
        8  arregloInfoUnProducto.push(ancho);
        9  arregloInfoUnProducto.push(piezas);
        10  arregloInfoUnProducto.push(activado);
        11  arregloInfoUnProducto.push(nombreIngrediente);

          //TBLPRODUCTO
        12  arregloInfoUnProducto.push(descripcion);
        13  arregloInfoUnProducto.push(ingredientes);
        14  arregloInfoUnProducto.push(seo);
        15  arregloInfoUnProducto.push(activadoGeneral);
        16  arregloInfoUnProducto.push(idtblcategproduct);
        17  arregloInfoUnProducto.push(idtblclasifproduct);
     */
    //LIMPIAMOS LOS ELEMENTOS PARA AGREGAR LOS DE ESTE PRODUCTO ESPECIFICOS
    $("#modificar_especificingredientes_producto_linea").empty();
     //LIMPIAMOS LOS ELEMENTOS PARA AGREGAR LOS DE ESTE PRODUCTO GENERALES
    $("#modificar_categoria_producto_linea_general").empty();   
    $("#modificar_clasificacion_producto_linea_general").empty();
    $("#modificar_galeria_producto_linea_general").empty();

    $('#modificar_id_producto_linea').val(idProducto);
    $('#modificar_id_productoDetalle_linea').val(idProductoDetalle);
    if(arregloInfoTodosProducto[idexArreglo][10]==0)
      $('#modificar_activado_producto_linea').prop('checked', false);
    else if(arregloInfoTodosProducto[idexArreglo][10]==1)
      $('#modificar_activado_producto_linea').prop('checked', true);
    $('#modificar_nombre_producto_linea').val(arregloInfoTodosProducto[idexArreglo][1]);
    $('#modificar_detalle_diasElborar_producto_linea').val(arregloInfoTodosProducto[idexArreglo][3]);
    $('#modificar_detalle_precio_producto_linea').val(arregloInfoTodosProducto[idexArreglo][5]);
    $('#modificar_detalle_stock_producto_linea').val(arregloInfoTodosProducto[idexArreglo][4]);    //dimenciones
    $('#modificar_clasifcategproduct_cuadrado_largo_producto_linea').val(arregloInfoTodosProducto[idexArreglo][7]);    
    $('#modificar_clasifcategproduct_cuadrado_ancho_producto_linea').val(arregloInfoTodosProducto[idexArreglo][8]);
    $('#modificar_clasifcategproduct_circular_diametro_producto_linea').val(arregloInfoTodosProducto[idexArreglo][6]);
    $('#modificar_clasifcategproduct_piezas_producto_linea').val(arregloInfoTodosProducto[idexArreglo][9]);

    //CREAMOS LAS OPCIONES PARA INGREDIENTES Y DEJAMOS COMO SELECCIONADA LA DEL PRODUCTO
    $.each(arregloEspecifiIngredientesId, function(i,item){
      if(arregloInfoTodosProducto[idexArreglo][11]==arregloEspecifiIngredientesNombre[i])
        $("#modificar_especificingredientes_producto_linea").append('<option value="'+item+'"selected>'+arregloEspecifiIngredientesNombre[i]+'</option>');
      else
        $("#modificar_especificingredientes_producto_linea").append('<option value="'+item+'">'+arregloEspecifiIngredientesNombre[i]+'</option>');
    });
    //DATOS GENERALES
    $('#modificar_id_producto_linea_general').val(idProducto);
    //IMAGENES
    if(arregloInfoTodosProducto[idexArreglo][15]==0)
      $('#modificar_activado_producto_linea_general').prop('checked', false);
    else if(arregloInfoTodosProducto[idexArreglo][15]==1)
      $('#modificar_activado_producto_linea_general').prop('checked', true);
    $.each(arregloImagenesTodosProducto, function(i,item){
      if(arregloImagenesTodosProducto[i][0].indexOf(idProducto)===0)
      {
        $.each(arregloImagenesTodosProducto[i], function(j,item)
        {
          j++;
          if(arregloImagenesTodosProducto[i][j] != undefined)
          {
            $("#modificar_galeria_producto_linea_general").append('<div class="uk-width-medium-1-3"><div class="md-card"><div class="md-card-content" > <img  class="" src="'+arregloImagenesTodosProducto[i][j]+'" alt=""></div></div></div>');
          }
        });        
        return false;
      }
    });

    $('#modificar_nombre_producto_linea_general').val(arregloInfoTodosProducto[idexArreglo][1]);
    $('#modificar_seo_producto_linea_general').val(arregloInfoTodosProducto[idexArreglo][14]);
    $('#modificar_descripcion_producto_linea_general').val(arregloInfoTodosProducto[idexArreglo][12]);
    $('#modificar_ingredientes_producto_linea_general').val(arregloInfoTodosProducto[idexArreglo][13]);
    //CREAMOS LAS OPCIONES PARA CATEGORIAS Y DEJAMOS COMO SELECCIONADA LA DEL PRODUCTO
    $.each(arregloCategoriaProductoId, function(i,item){
      if(arregloInfoTodosProducto[idexArreglo][16]==arregloCategoriaProductoId[i])
        $("#modificar_categoria_producto_linea_general").append('<option value="'+item+'"selected>'+arregloCategoriaProductoNombre[i]+'</option>');
      else
        $("#modificar_categoria_producto_linea_general").append('<option value="'+item+'"selected>'+arregloCategoriaProductoNombre[i]+'</option>');
    });
    //CREAMOS LAS OPCIONES PARA CLASIFICACI? Y DEJAMOS COMO SELECCIONADA LA DEL PRODUCTO
    $.each(arregloClasificacionProductoId, function(i,item){
      if(arregloInfoTodosProducto[idexArreglo][17]==arregloClasificacionProductoId[i])
        $("#modificar_clasificacion_producto_linea_general").append('<option value="'+item+'"selected>'+arregloClasificacionProductoNombre[i]+'</option>');
      else
        $("#modificar_clasificacion_producto_linea_general").append('<option value="'+item+'">'+arregloClasificacionProductoNombre[i]+'</option>');
    });
  }
  //function modificarProductoCotizaor(idProducto,idProductoDetalle,nombre,stock,productdetalle_size){
  function modificarProductoCotizaor(idexArreglo,idtblproductcotizador,nombre){
    /*
    0 arregloInfoUnProductoCotizador.push(idProductoCotizador);
    1 arregloInfoUnProductoCotizador.push(nombreCotizador);
    2 arregloInfoUnProductoCotizador.push(descripcionCotizador);
    3 arregloInfoUnProductoCotizador.push(ingredienteCotizador);
    4 arregloInfoUnProductoCotizador.push(promcalificacionCotizador);
    5 arregloInfoUnProductoCotizador.push(diaselaboracionCotizador);
    6 arregloInfoUnProductoCotizador.push(activadoCotizador);
    7 arregloInfoUnProductoCotizador.push(idtbleventoCotizador);
    8 arregloInfoUnProductoCotizador.push(idtblproveedorCotizador);           
    
    arregloInfoTodosProductoCotizador.push(arregloInfoUnProductoCotizador);
     */
    $("#modificar_nombre_producto_cotizador").empty();
    $("#modificar_descripcion_producto_cotizador").empty();
    $("#modificar_ingredientes_producto_cotizador").empty();
    $("#modificar_evento_producto_cotizador").empty();
    $("#modificar_activado_producto_cotizador").empty();

    $("#modificar_galeria_producto_cotizador").empty();
    
    $("#modificar_srcimg1_producto_cotizador").empty();
    $("#modificar_srcimg2_producto_cotizador").empty();
    $("#modificar_srcimg3_producto_cotizador").empty();
    $("#modificar_detalle_diasElborar_producto_cotizador").empty();

    $('#modificar_id_producto_cotizador').val(idtblproductcotizador);
    $("#modificar_nombre_producto_cotizador").val(arregloInfoTodosProductoCotizador[idexArreglo][1]);
    $("#modificar_descripcion_producto_cotizador").val(arregloInfoTodosProductoCotizador[idexArreglo][2]);
    $("#modificar_ingredientes_producto_cotizador").val(arregloInfoTodosProductoCotizador[idexArreglo][3]);
    $("#modificar_detalle_diasElborar_producto_cotizador").val(arregloInfoTodosProductoCotizador[idexArreglo][5]);

    if(arregloInfoTodosProductoCotizador[idexArreglo][6]==0)
      $('#modificar_activado_producto_cotizador').prop('checked', false);
    else if(arregloInfoTodosProductoCotizador[idexArreglo][6]==1)
      $('#modificar_activado_producto_cotizador').prop('checked', true);

    $.each(arregloImagenesTodosProductoCotizador, function(i,item){
      if(arregloImagenesTodosProductoCotizador[i][0].indexOf(idtblproductcotizador)===0)
      {
        $.each(arregloImagenesTodosProductoCotizador[i], function(j,item)
        {
          j++;
          if(arregloImagenesTodosProductoCotizador[i][j] != undefined)
          {
            $("#modificar_galeria_producto_cotizador").append('<div class="uk-width-medium-1-3"><div class="md-card"><div class="md-card-content" > <img  class="" src="'+arregloImagenesTodosProductoCotizador[i][j]+'" alt=""></div></div></div>');
          }
        });        
        return false;
      }
    });

    //$("#modificar_evento_producto_cotizador").val(arregloInfoTodosProductoCotizador[idexArreglo][7]);
    //CREAMOS LAS OPCIONES PARA CATEGORIAS Y DEJAMOS COMO SELECCIONADA LA DEL PRODUCTO
    $.each(arregloEventosId, function(i,item){
      if(arregloInfoTodosProductoCotizador[idexArreglo][7]==arregloEventosId[i])
        $("#modificar_evento_producto_cotizador").append('<option value="'+item+'"selected>'+arregloEventosNombre[i]+'</option>');
      else
        $("#modificar_evento_producto_cotizador").append('<option value="'+item+'"selected>'+arregloEventosNombre[i]+'</option>');
    });

    $("#modificar_idProveedor_producto_cotizador").val(arregloInfoTodosProductoCotizador[idexArreglo][8]);

    if(arregloInfoTodosProductoCotizador[idexArreglo][10]==0)
      $('#modificar_activado_producto_linea').prop('checked', false);
    else if(arregloInfoTodosProductoCotizador[idexArreglo][10]==1)
      $('#modificar_activado_producto_linea').prop('checked', true);

  }

  //function modificarProductoComplementario('+idexArreglo+','+idProducto+','+idProducto+'){
  function modificarProductoComplementario(idexArreglo,idtblproductcomplementario,nombre){
    //alert('entro a modificarProductoComplementario');
    /*
    0 arregloInfoUnProductoComplementario.push(idProductoComplementario);
    1 arregloInfoUnProductoComplementario.push(nombreComplementario);
    2 arregloInfoUnProductoComplementario.push(descripcionComplementario);
    3 arregloInfoUnProductoComplementario.push(seoComplementario);
    4 arregloInfoUnProductoComplementario.push(precioRealComplementario);
    5 arregloInfoUnProductoComplementario.push(srcimgComplementario);
    6 arregloInfoUnProductoComplementario.push(activadoComplementario);
    7 arregloInfoUnProductoComplementario.push(idtblproveedorComplementario);
    8 arregloInfoUnProductoComplementario.push(stockComplementario);

    arregloInfoTodosProductoComplementario.push(arregloInfoUnProductoComplementario);
    arregloInfoUnProductoComplementario=[];
     */
    $("#modificar_nombre_producto_Complementario").empty();
    $("#modificar_descripcion_producto_Complementario").empty();
    $("#modificar_seo_producto_Complementario").empty();
    $("#modificar_precio_producto_Complementario").empty();
    $("#modificar_srcimg1_producto_Complementario").empty();
    $("#modificar_activado_producto_Complementario").empty();    
    $("#modificar_idProveedor_producto_Complementario").empty();
    $("#modificar_stock_producto_Complementario").empty();
    $("#modificar_galeria_producto_Complementario").html("");


    $('#modificar_id_producto_Complementario').val(idtblproductcomplementario);
    $("#modificar_nombre_producto_Complementario").val(arregloInfoTodosProductoComplementario[idexArreglo][1]);
    $("#modificar_descripcion_producto_Complementario").val(arregloInfoTodosProductoComplementario[idexArreglo][2]);
    $("#modificar_seo_producto_Complementario").val(arregloInfoTodosProductoComplementario[idexArreglo][3]);
    $("#modificar_precio_producto_Complementario").val(arregloInfoTodosProductoComplementario[idexArreglo][4]);

    $("#modificar_idProveedor_producto_Complementario").val(arregloInfoTodosProductoComplementario[idexArreglo][7]);

    $("#modificar_stock_producto_Complementario").val(arregloInfoTodosProductoComplementario[idexArreglo][8]);
    
    $("#modificar_galeria_producto_Complementario").append('<div class="uk-width-medium-1-3"><div class="md-card"><div class="md-card-content" > <img id="fotografia_complementario_actual" name="fotografia_complementario_actual" class="" src="./../assests_general/productos/complementario/'+arregloInfoTodosProductoComplementario[idexArreglo][5]+'" alt=""></div></div></div>');

    if(arregloInfoTodosProductoComplementario[idexArreglo][6]==0)
      $('#modificar_activado_producto_Complementario').prop('checked', false);
    else if(arregloInfoTodosProductoComplementario[idexArreglo][6]==1)
      $('#modificar_activado_producto_Complementario').prop('checked', true);
  }


  function actualizarProductoComplementario(){

    idtblproductcomplem=$('#modificar_id_producto_Complementario').val();
    nombre=$("#modificar_nombre_producto_Complementario").val();
    descripcion=$("#modificar_descripcion_producto_Complementario").val();
    seo=$("#modificar_seo_producto_Complementario").val();
    precioreal=$("#modificar_precio_producto_Complementario").val();
    preciobp=precioreal;
    idtblproveedor=$("#modificar_idProveedor_producto_Complementario").val();
    stock=$("#modificar_stock_producto_Complementario").val();
    activado=$('#modificar_activado_producto_Complementario').val();
    emailmodifico='miguel@bepickler.com';
    //srcimgActual=$("#fotografia_complementario_actual").val();
    srcimgActual=$("#fotografia_complementario_actual").attr("src");
    //alert('srcimgActual::'+srcimgActual);
    srcimgActual=srcimgActual.replace('./../assests_general/productos/complementario/', '');
    //alert('srcimgActual::'+srcimgActual);
    
    if(activado=='on'){
      activado=1;
    }else{
      activado=0;
    }
    //./../assests_general/productos/complementario/i_11_p_1_12.jpg

    //obentenso el inptup de la iamgen
    srcimg1=$("#modificar_srcimg1_producto_Complementario").val().replace(/C:\\fakepath\\/i, '');
    //alert('srcimg1::'+srcimg1);   
    //.replace(/C:\\fakepath\\/i, ''); 
    //si no esta vacio le asignamos la el nombre de la nueva imagen, si lo esta solo asignamos  el mismo nombre que tenia anteriormente
    if(srcimg1!=''){
      console.log('entro al if srcimg1 tiene datos');
      srcimg1='i_'+idtblproductcomplem+'p_'+idtblproveedor+'_'+srcimg1;
      $('#modificar_srcimg1_producto_ComplementarioBD').val(srcimg1);
      //borramos la actual file de la fotografia del servidor
      $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteFileImgProductoComplementario.php",  data: {solicitadoBy:"WEB",tblproductimg_srcimg:srcimgActual} })
        .done(function( datos ){
          $('#productosComplementarioPlantilla').html("");
          $('#productoscotizadorPlantilla').html("");
          $('#productoslineaPlantilla').html(""); 
          //cargarValoresDefault();
          console.log('setDeleteFileImgProductoComplementario datos::'+datos.datos);
        })
        .fail(function( jqXHR, textStatus ) {  console.log("setDeleteFileImgProductoCotizador  fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  
        //console.log("setDeleteFileImgProductoCotizador  always");
         });

      //subimos la nueva fotografia al servidor
      var formData = new FormData($("#formActualizarProductoComplementario")[0]);
      var ruta = "imagen-ajax.php";
      $.ajax({  method: "POST",  url: "uploadImgProductoComplementario.php",  data: formData ,contentType: false,
        processData: false, })
        .done(function( datos )
        {
          console.log('uploadImgProductoComplementario done datos::'+datos);
          $('#productosComplementarioPlantilla').html("");
          $('#productoscotizadorPlantilla').html("");
          $('#productoslineaPlantilla').html("");
          //cargarValoresDefault();
        })
        .fail(function( jqXHR, textStatus ) {  console.log("uploadImgProductoCotizador fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  
        //console.log("always");
         });
    }else{
      console.log('entro al else srcimg1 tiene datos');
      srcimg1=srcimgActual;
    }    
    
    console.log('datos para actualizar:: idtblproductcomplem'+idtblproductcomplem+' nombre::'+nombre+' descripcion::'+descripcion+' seo::'+seo+' precioreal::'+precioreal+' preciobp::'+preciobp+' srcimg1::'+srcimg1+' activado::'+activado+' idtblproveedor::'+idtblproveedor+' stock::'+stock+' emailmodifico::'+emailmodifico);
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setUpdateTblproductcomplem.php", data: {solicitadoBy:"WEB",idtblproductcomplem:idtblproductcomplem,nombreproductcomplem:nombre,descripcion:descripcion,seo:seo,precioreal:precioreal,preciobp:preciobp,srcimg:srcimg1,activado:activado,idtblproveedor:idtblproveedor,stock:stock,emailmodifico:emailmodifico }  })
      .done(function( msgTblProductoComplementario ) {
        //alert('Elimnaci? Exitosa');
        console.log('setUpdateTblproductcomplem done msgTblProductoComplementario::'+msgTblProductoComplementario.datos);
        $('#productosComplementarioPlantilla').html("");
        $('#productoscotizadorPlantilla').html("");
        $('#productoslineaPlantilla').html("");
        $('#formActualizarProductoComplementario')[0].reset();
        UIkit.modal("#popup_modificarproductoComplementario").hide();
        UIkit.modal.alert('Producto Complementario Actualizado');
        cargarValoresDefault();
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setUpdateTblproductcomplem fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){ 
       //console.log("always");
     });
    
  }


  function actualizarProductoCotizador(){
    //tblproducto
    idProducto=$('#modificar_id_producto_cotizador').val();
    //alert(idProducto);
    nombre=$("#modificar_nombre_producto_cotizador").val();
    descripcion=$("#modificar_descripcion_producto_cotizador").val();
    ingrediente=$("#modificar_ingredientes_producto_cotizador").val();
    idtblevento=$("#modificar_evento_producto_cotizador").val();
    activado=$('#modificar_activado_producto_cotizador').is(':checked');
    if(activado)
      activado=1;
    else
      activado=0;
    idtblproveedor=1;
    diaselaboracion=$("#modificar_detalle_diasElborar_producto_cotizador").val();
    promcalificacion=5;
    emailmodifico='miguel@bepickler.com';

    srcimg1=$("#modificar_srcimg1_producto_cotizador").val();
    srcimg2=$("#modificar_srcimg2_producto_cotizador").val();
    srcimg3=$("#modificar_srcimg3_producto_cotizador").val();
    if(srcimg1==''||srcimg2==''||srcimg3=='')
    //if(1!=1)
    {
      srcimg1='';
      srcimg2='';
      srcimg3='';
    }else 
    {
      srcimg1=srcimg1.replace(/C:\\fakepath\\/i, '');
      srcimg2=srcimg2.replace(/C:\\fakepath\\/i, '');
      srcimg3=srcimg3.replace(/C:\\fakepath\\/i, '');
      //personalizar el nombre del producto
      srcimg1='p_'+idProducto+'_'+srcimg1;
      srcimg2='p_'+idProducto+'_'+srcimg2;
      srcimg3='p_'+idProducto+'_'+srcimg3;
      //alert(idProducto);
      /////////////////////////////////////////////////////////
      var arregloIdtblproductimgCotizador=[];
      var arregloTblproductimg_srcimgCotizador=[];
      //SOLICITAMOS TODOS LOS REGISTROS DE IMANGENES DE UN PRODUCTO
      /*
      $solicitadoBy=$_POST["solicitadoBy"];
    $idtblproductcotizador=$_POST["idtblproductcotizador"];
       */
      $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblproductcotimg.php",  data: {solicitadoBy:"WEB",idtblproductcotizador:idProducto} })
        .done(function( msgTblProductoImg )
        {
          //OBTENEMOS TODOS LOS REGISTROS 
          $.each(msgTblProductoImg.datos, function(i,item){
            //GUARDAMOS EL ID DEL LA IAMGEN EN EL ARREGLO
            arregloIdtblproductimgCotizador.push(msgTblProductoImg.datos[i].idtblproductcotimg);
            //GUARDAMOS EL NOMBRE DE LA IAMGEN EN EL ARREGLO
            arregloTblproductimg_srcimgCotizador.push(msgTblProductoImg.datos[i].tblproductcotimg_srcimg);
          });
          //SOLICITAMOS BORRAR TODOS LOS REGISTROS DE LAS IMAGENES DEL PRODUCTO
          //alert(idProducto);
          idProductoCotizador=idProducto;
          //alert('idProductoCotizador::'+idProductoCotizador);
          $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteTblproductcotimgOfProducto.php",  data: {solicitadoBy:"WEB",idtblproductcotizador:idProducto} })
            .done(function( datos )
            {
              //alert(idProducto);
              console.log('SE BORRARON EXITOSAMENTE');
              //SE BORRARON EXITOSAMENTE
              //REGISTRAR LA PRIMERA IMAGEN
              /*
              $solicitadoBy=$_POST["solicitadoBy"];
              $srcimg=$_POST["srcimg"];
              $idtblproductcotizador=$_POST["idtblproductcotizador"];
              $emailcreo=$_POST["emailcreo"];
               */
              console.log('datos a envair srcimg1::'+srcimg1+' srcimg2::'+srcimg2+' srcimg3::'+srcimg3+' idtblproductcotizador::'+idProductoCotizador+' emailcreo::'+emailmodifico)
              $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductcotimg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg1,idtblproductcotizador:idProductoCotizador,emailcreo:emailmodifico}  })
                .done(function( msgTblProductoImg1 )
                {
                  srcimg1=$('#modificar_srcimg1_producto_cotizadorBD').val(msgTblProductoImg1.datos);
                  $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductcotimg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg2,idtblproductcotizador:idProductoCotizador,emailcreo:emailmodifico}  })
                    .done(function( msgTblProductoImg2 )
                    {
                      srcimg2=$('#modificar_srcimg2_producto_cotizadorBD').val(msgTblProductoImg2.datos);
                      $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductcotimg.php",  data: {solicitadoBy:"WEB",srcimg:srcimg3,idtblproductcotizador:idProductoCotizador,emailcreo:emailmodifico}  })
                        .done(function( msgTblProductoImg3 )
                        {
                          srcimg3=$('#modificar_srcimg3_producto_cotizadorBD').val(msgTblProductoImg3.datos);
                          //SUBIMOS LAS NUEVAS IMAGENES AL ARCHIVO
                          console.log('SUBIMOS LAS NUEVAS IMAGENES AL ARCHIVO');
                          var formData = new FormData($("#formActualizarProductoCotizador")[0]);
                          var ruta = "imagen-ajax.php";
                          $.ajax({  method: "POST",  url: "uploadImgProductoCotizador.php",  data: formData ,contentType: false,
                          processData: false, })
                            .done(function( datos )
                            {
                              console.log('uploadImgProductoCotizador done datos::'+datos);
                              $('#productosComplementarioPlantilla').html("");
                              $('#productoscotizadorPlantilla').html("");
                              $('#productoslineaPlantilla').html("");
                              $('#formActualizarProductoCotizador')[0].reset();
                             
                              cargarValoresDefault();
                            })
                            .fail(function( jqXHR, textStatus ) {  console.log("uploadImgProductoCotizador fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                            .always(function(){  /*console.log("always");*/ });                         
                        })
                        .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcotimg3 fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                        .always(function(){  /*console.log("always");*/ }); 
                    })
                    .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcotimg2 fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                    .always(function(){  /*console.log("always");*/ });
                  // ejecutar el ajax de subida pero cuando se pida el mombre en el php consultar el nombre en la bd y asigarlo            
                })
                .fail(function( jqXHR, textStatus ) {  console.log("setTblproductcotimg1 fail jqXHR::"+jqXHR+" IMG textStatus::"+textStatus);  })
                .always(function(){  /*console.log("always");*/ });              
            })
            .fail(function( jqXHR, textStatus ) {  console.log("setDeleteTblproductImgOfProducto  fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
            .always(function(){  /*console.log("setDeleteTblproductImgOfProducto  always");*/ });
          //RECORREMOS EL ARREGLO DE LOS ID
          $.each(arregloIdtblproductimgCotizador, function(i,item){
            //SOLICITAMOS BORRAR TODOS LOS ARCHIVOS FISICOS
            $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteFileImgProductoCotizador.php",  data: {solicitadoBy:"WEB",tblproductimg_srcimg:arregloTblproductimg_srcimgCotizador[i]} })
              .done(function( datos ){ 
              })
              .fail(function( jqXHR, textStatus ) {  console.log("setDeleteFileImgProductoCotizador  fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
              .always(function(){  /*console.log("setDeleteFileImgProductoCotizador  always");*/ });
          });
        })
        .fail(function( jqXHR, textStatus ) {  console.log("getAllTblproductImgProducto fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  /*console.log("getAllTblproductImgProducto always");*/ });
      
    }

    /*
    $solicitadoBy=$_POST["solicitadoBy"];
    $idtblproductcotizador=$_POST["idtblproductcotizador"];
    $nombreproductcotizador=$_POST["nombreproductcotizador"];
    $descripcion=$_POST["descripcion"];
    $ingrediente=$_POST["ingrediente"];
    $promcalificacion=$_POST["promcalificacion"];
    $diaselaboracion=$_POST["diaselaboracion"];
    $activado=$_POST["activado"];
    $idtblevento=$_POST["idtblevento"];
    $idtblproveedor=$_POST["idtblproveedor"];
    $emailmodifico=$_POST["emailmodifico"];
     */
    
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setUpdateTblproductcotizador.php", data: {solicitadoBy:"WEB",idtblproductcotizador:idProducto,nombreproductcotizador:nombre,descripcion:descripcion,ingrediente:ingrediente,promcalificacion:promcalificacion,diaselaboracion:diaselaboracion,activado:activado,idtblproveedor:idtblproveedor,idtblevento:idtblevento,emailmodifico:emailmodifico }  })
      .done(function( msgTblProductoDetalles ) {
        //alert('Elimnaci? Exitosa');
        $('#productoscotizadorPlantilla').html("");
        $('#productosComplementarioPlantilla').html("");
        $('#productoslineaPlantilla').html("");
        UIkit.modal.alert('Producto Cotizador Actualizado');
        UIkit.modal("#popup_modificarproductocotizador").hide();
        cargarValoresDefault();
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setUpdateTblproductcotizador fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  /*console.log("always");*/ });
  }




  function actualizarProductoDetalle(){
    idProductoDetalle=$("#modificar_id_productoDetalle_linea").val();
    diasElborar=$("#modificar_detalle_diasElborar_producto_linea").val();
    stock=$("#modificar_detalle_stock_producto_linea").val();
    precio=$("#modificar_detalle_precio_producto_linea").val();
    preciobp=precio;
    diametro=$("#modificar_clasifcategproduct_circular_diametro_producto_linea").val();
    largo=$("#modificar_clasifcategproduct_cuadrado_largo_producto_linea").val();
    ancho=$("#modificar_clasifcategproduct_cuadrado_ancho_producto_linea").val();
    if(diametro!=''){
      porciones=Math.round((Math.PI*diametro)/2);
      largo='';
      ancho='';
      piezas='';
    }
    else if(largo!=''&&ancho!=''){
      porciones=largo*ancho/2*5;
      diametro='';
      piezas='';
    }
    else if(piezas!=''){
      porciones=piezas;
      largo='';
      ancho='';
      diametro='';
    }
    piezas=$("#modificar_clasifcategproduct_piezas_producto_linea").val();
    activado=$("#modificar_activado_producto_linea").is(':checked');
    //alert('activado::'+activado);
    if(activado)
      activado=1;
    else
      activado=0;
    idProducto=$("#modificar_id_producto_linea").val();
    especificingredientes=$("#modificar_especificingredientes_producto_linea").val();
    emailmodifico='miguel@bepickler.com';

    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setUpdateTblproductDetalle.php", data: {solicitadoBy:"WEB",idtblproductdetalle:idProductoDetalle,diaselaboracion:diasElborar,stock:stock,precioreal:precio,preciobp:preciobp,diametro:diametro,largo:largo,ancho:ancho,porciones:porciones,piezas:piezas,activado:activado,idtblproducto:idProducto, idtblespecifingrediente:especificingredientes ,emailmodifico:emailmodifico }  })
            .done(function( msgTblProductoDetalles ) {
              //alert('Elimnaci? Exitosa');
              //$('#productoslineaPlantilla').html("");
              //cargarValoresAltaProductoLinea();
              //mostrarProductos();
              
              //cargarValoresDefault();
              $('#productosComplementarioPlantilla').html("");
              $('#productoscotizadorPlantilla').html("");
              $('#productoslineaPlantilla').html("");
              $('#formActualizarProductoLinea')[0].reset();
              UIkit.modal("#popup_modificarproductolinea").hide();
              cargarValoresDefault();
            })
            .fail(function( jqXHR, textStatus ) {  console.log("setUpdateTblproductDetalle fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
            .always(function(){  /*console.log("always");*/ });

  }
  function actualizarProductoGeneral(){
    //tblproducto
    idProducto=$("#modificar_id_producto_linea_general").val();
    nombre=$("#modificar_nombre_producto_linea_general").val();
    descripcion=$("#modificar_descripcion_producto_linea_general").val();
    ingredientes=$("#modificar_ingredientes_producto_linea_general").val();
    seo=$("#modificar_seo_producto_linea_general").val();
    promcalif=5;
    activado=$("#modificar_activado_producto_linea_general").is(':checked');
    if(activado)
      activado=1
    else
      activado=0 
    idtblproveedor=1;
    categoria=$("#modificar_categoria_producto_linea_general").val();
    clasificacion=$("#modificar_clasificacion_producto_linea_general").val();
    emailmodifico='miguel@bepickler.com';

    srcimg1=$("#modificar_srcimg1_producto_linea").val();
    srcimg2=$("#modificar_srcimg2_producto_linea").val();
    srcimg3=$("#modificar_srcimg3_producto_linea").val();
    //los 3 campos son obligatorios para poder regitrar la nueva imagen del producto si no se dara por vacios y no se registrar las nuevas fotograf?s
    if(srcimg1==''||srcimg2==''||srcimg3=='')
    //if(1!=1)
    {
      srcimg1='';
      srcimg2='';
      srcimg3='';
    }else 
    {
      srcimg1=srcimg1.replace(/C:\\fakepath\\/i, '');
      srcimg2=srcimg2.replace(/C:\\fakepath\\/i, '');
      srcimg3=srcimg3.replace(/C:\\fakepath\\/i, '');
      //personalizar el nombre del producto
      srcimg1='p_'+idProducto+'_'+srcimg1;
      srcimg2='p_'+idProducto+'_'+srcimg2;
      srcimg3='p_'+idProducto+'_'+srcimg3;
     
      /////////////////////////////////////////////////////////
      var arregloIdtblproductimg=[];
      var arregloTblproductimg_srcimg=[];
      //SOLICITAMOS TODOS LOS REGISTROS DE IMANGENES DE UN PRODUCTO
      $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblproductImgProducto.php",  data: {solicitadoBy:"WEB",idtblproducto:idProducto} })
        .done(function( msgTblProductoImg )
        {
          //OBTENEMOS TODOS LOS REGISTROS 
          $.each(msgTblProductoImg.datos, function(i,item){
            //GUARDAMOS EL ID DEL LA IAMGEN EN EL ARREGLO
            arregloIdtblproductimg.push(msgTblProductoImg.datos[i].idtblproductimg);
            //GUARDAMOS EL NOMBRE DE LA IAMGEN EN EL ARREGLO
            arregloTblproductimg_srcimg.push(msgTblProductoImg.datos[i].tblproductimg_srcimg);
          });
          //alert('SOLICITAMOS BORRAR TODOS LOS REGISTROS DE LAS IMAGENES DEL PRODUCTO');
          //SOLICITAMOS BORRAR TODOS LOS REGISTROS DE LAS IMAGENES DEL PRODUCTO
          $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteTblproductImgOfProducto.php",  data: {solicitadoBy:"WEB",idtblproducto:idProducto} })
            .done(function( datos )
            {
              //alert('SE BORRARON EXITOSAMENTE -> REGISTRAR LA PRIMERA IMAGEN');
              //SE BORRARON EXITOSAMENTE
              //REGISTRAR LA PRIMERA IMAGEN
              $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductImg.php",  data: {solicitadoBy:"WEB",idtblproductimg:idProducto,srcimg:srcimg1,idtblproducto:idProducto,emailcreo:emailmodifico}  })
                .done(function( msgTblProductoImg1 )
                {
                  //SE REGISTRO LA PRIMERA IMAGEN
                  //OBTENEMOS EL NOMBRE DE LA UMAGEN Y LA ASIGNAMOS A modificar_srcimg1_producto_lineaBD
                  srcimg1=$('#modificar_srcimg1_producto_lineaBD').val(msgTblProductoImg1.datos);
                  $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductImg.php",  data: {solicitadoBy:"WEB",idtblproductimg:idProducto,srcimg:srcimg2,idtblproducto:idProducto,emailcreo:emailmodifico}  })
                    .done(function( msgTblProductoImg2 )
                    {
                      srcimg2=$('#modificar_srcimg2_producto_lineaBD').val(msgTblProductoImg2.datos);
                      $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setTblproductImg.php",  data: {solicitadoBy:"WEB",idtblproductimg:idProducto,srcimg:srcimg3,idtblproducto:idProducto,emailcreo:emailmodifico}  })
                        .done(function( msgTblProductoImg3 )
                        {
                          srcimg3=$('#modificar_srcimg3_producto_lineaBD').val(msgTblProductoImg3.datos);
                          //alert('//SUBIMOS LAS NUEVAS IMAGENES AL ARCHIVO');
                          //SUBIMOS LAS NUEVAS IMAGENES AL ARCHIVO
                          //var formData = new FormData($("#actualizarProducto")[0]);
                          var formData = new FormData($("#formActualizarProductoLineaGeneral")[0]);
                          //alert('formData::'+formData);
                          var ruta = "imagen-ajax.php";
                          $.ajax({  method: "POST",  url: "uploadImgProductoLinea.php",  data: formData ,contentType: false,
                          processData: false, })
                            .done(function( datos )
                            {
                              //alert('SE SUBIERON CONEXITO LAS IMAGENES DE LA PARPETA DATOS::'+datos);
                              //$('#productoslineaPlantilla').html("");
                              //cargarValoresDefault();
                              $('#productosComplementarioPlantilla').html("");
                            $('#productoscotizadorPlantilla').html("");
                            $('#productoslineaPlantilla').html("");
                            $('#formActualizarProductoLineaGeneral')[0].reset();
                            UIkit.modal("#popup_modificarproductolineageneral").hide();
                            cargarValoresDefault();
                            })
                            .fail(function( jqXHR, textStatus ) {  console.log("uploadImgProductoLinea fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                            .always(function(){  /*console.log("always");*/ });                         
                        })
                        .fail(function( jqXHR, textStatus ) {  console.log("setTblproductImg fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                        .always(function(){  /*console.log("always");*/ }); 
                    })
                    .fail(function( jqXHR, textStatus ) {  console.log("setTblproductImg fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                    .always(function(){  /*console.log("always");*/ });
                  // ejecutar el ajax de subida pero cuando se pida el mombre en el php consultar el nombre en la bd y asigarlo            
                })
                .fail(function( jqXHR, textStatus ) {  console.log("setTblproductImg IMG fail jqXHR::"+jqXHR+" IMG textStatus::"+textStatus);  })
                .always(function(){  /*console.log("always");*/ });              
            })
            .fail(function( jqXHR, textStatus ) {  console.log("setDeleteTblproductImgOfProducto  fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
            .always(function(){  /*console.log("setDeleteTblproductImgOfProducto  always");*/ });
          //alert('antes del each de borrar file');
          //RECORREMOS EL ARREGLO DE LOS ID
          $.each(arregloIdtblproductimg, function(i,item){
            //SOLICITAMOS BORRAR TODOS LOS ARCHIVOS FISICOS
            //alert('entro al each i::'+i+' item::'+item+' arregloTblproductimg_srcimg[i]::'+arregloTblproductimg_srcimg[i]);
            $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteFileImgProducto.php",  data: {solicitadoBy:"WEB",tblproductimg_srcimg:arregloTblproductimg_srcimg[i]} })
              .done(function( datos ){ 
                //alert('done datos.datos::'+datos.datos+' datos.success::'+datos.success);
              })
              .fail(function( jqXHR, textStatus ) {  console.log("setDeleteFileImgProducto  fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
              .always(function(){  /*console.log("setDeleteFileImgProducto  always");*/ });
          });
        })
        .fail(function( jqXHR, textStatus ) {  console.log("getAllTblproductImgProducto fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  /*console.log("getAllTblproductImgProducto always");*/ });
      
    }
    //alert('setUpdateTblproducto::'+activado);
    //console.log('idProducto:'+idProducto+' nombre::'+nombre+' descripcion::'+descripcion+' ingredientes::'+ingredientes+' seo::'+seo+' promcalif::'+promcalif+' activado::'+activado+' idtblproveedor::'+idtblproveedor+' categoria::'+categoria+' clasificacion::'+clasificacion+' emailmodifico::'+emailmodifico);
    
    $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setUpdateTblproducto.php", data: {solicitadoBy:"WEB",idtblproducto:idProducto,nombreproduct:nombre,descripcion:descripcion,ingredientes:ingredientes,seo:seo,promcalif:promcalif,activado:activado,idtblproveedor:idtblproveedor,idtblcategproduc:categoria,idtblclasifproduct:clasificacion,emailmodifico:emailmodifico }  })
      .done(function( msgTblProductoGeneral ) {
        //alert('msgTblProductoGeneral'+msgTblProductoGeneral.success);
        $('#productosComplementarioPlantilla').html("");
        $('#productoscotizadorPlantilla').html("");
        $('#productoslineaPlantilla').html("");
        if(srcimg1!=''&&srcimg2!=''&&srcimg3!='')
        {
          $('#formActualizarProductoLineaGeneral')[0].reset();         
        }
        UIkit.modal("#popup_modificarproductolineageneral").hide();
        UIkit.modal.alert('Actualizado');
        cargarValoresDefault();
      })
      .fail(function( jqXHR, textStatus ) {  console.log("setUpdateTblproducto fail jqXHR::"+jqXHR.status+" textStatus::"+textStatus);  })
      .always(function(){   });
  }
  //function confirmacionEliminarProductoLinea(){}
  function eliminarProductoLinea(idProducto,idProductoDetalle){
    //if (respuesta == true) {
    numeroProductosDetalle='';
    /*
    Recibir el id del producto general tblproducto
    ver cuantos productos detalles existe de este producto
    si productos detalle es solo 1
    si existe solo este eliminar el producto (en cascada se elimianr los productos detalle y las imagenes)
    SiNo solo elimianr el producto que esta  seleccionando
    */
    //$.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblproductoTblproductoDetalleOfProveedor.php",  data: {solicitadoBy:"WEB",idtblproveedor:"1"}  })
    


      /////////////////////////////////////////////////////////
      var arregloIdtblproductimg=[];
      var arregloTblproductimg_srcimg=[];
      //SOLICITAMOS TODOS LOS REGISTROS DE IMANGENES DE UN PRODUCTO
      $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblproductImgProducto.php",  data: {solicitadoBy:"WEB",idtblproducto:idProducto} })
        .done(function( msgTblProductoImg )
        {
          //OBTENEMOS TODOS LOS REGISTROS 
          $.each(msgTblProductoImg.datos, function(i,item){
            //GUARDAMOS EL ID DEL LA IAMGEN EN EL ARREGLO
            arregloIdtblproductimg.push(msgTblProductoImg.datos[i].idtblproductimg);
            //GUARDAMOS EL NOMBRE DE LA IAMGEN EN EL ARREGLO
            arregloTblproductimg_srcimg.push(msgTblProductoImg.datos[i].tblproductimg_srcimg);
          });          
          //RECORREMOS EL ARREGLO DE LOS ID
          $.each(arregloIdtblproductimg, function(i,item){
            //SOLICITAMOS BORRAR TODOS LOS ARCHIVOS FISICOS
            //alert('entro al each i::'+i+' item::'+item+' arregloTblproductimg_srcimg[i]::'+arregloTblproductimg_srcimg[i]);
            $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteFileImgProducto.php",  data: {solicitadoBy:"WEB",tblproductimg_srcimg:arregloTblproductimg_srcimg[i]} })
              .done(function( datos ){ 
                //alert('done datos.datos::'+datos.datos+' datos.success::'+datos.success);
              })
              .fail(function( jqXHR, textStatus ) {  console.log("setDeleteFileImgProducto  fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
              .always(function(){  /*console.log("setDeleteFileImgProducto  always");*/ });
          });
          //COMIENZA CON LA ELIMINACION DE LAS BASES DE DATOS
          
          $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/getTblproductoDetalleProducto.php",  data: {solicitadoBy:"WEB",idtblproducto:idProducto}  })
            .done(function( msgTblProductoYDetalles ) {
              numeroProductosDetalle=0;
              $.each(msgTblProductoYDetalles.datos, function(i,item){
                numeroProductosDetalle++;
              });
              //numeroProductosDetalle++;
              console.log('ELIMINAR DESDE EL PRODUCTO::'+numeroProductosDetalle);
              
              if(numeroProductosDetalle<=1)
              {
                //ELIMINAR DESDE EL PRODUCTO
                console.log('ELIMINAR DESDE EL PRODUCTO');
                $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteTblproducto.php",  data: {solicitadoBy:"WEB",idtblproduct:idProducto}  })
                  .done(function( msgTblProducto ) {
                    
                    UIkit.modal.alert('Elimnación Exitosa');
                    //$('#productoslineaPlantilla').html("");
                    //cargarValoresDefault();
                    $('#productosComplementarioPlantilla').html("");
                                  $('#productoscotizadorPlantilla').html("");
                                  $('#productoslineaPlantilla').html("");
                                  cargarValoresDefault();
                  })
                  .fail(function( jqXHR, textStatus ) {  console.log("setDeleteTblproducto fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                  .always(function(){   });
              }
              else if(numeroProductosDetalle>1)
              {
                //ELIMINAR SOLO ESTE PRODUCTO DETALLE
                console.log('ELIMINAR SOLO ESTE PRODUCTO DETALLE');
                $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteTblproductDetalle.php",  data: {solicitadoBy:"WEB",idtblproductdetalle:idProductoDetalle}  })
                  .done(function( msgTblProductoDetalles ) {
                    alert('Elimnaci? Exitosa');
                    //$('#productoslineaPlantilla').html("");
                    //cargarValoresDefault();
                    $('#productosComplementarioPlantilla').html("");
                                  $('#productoscotizadorPlantilla').html("");
                                  $('#productoslineaPlantilla').html("");
                                  cargarValoresDefault();
                  })
                  .fail(function( jqXHR, textStatus ) {  console.log("setDeleteTblproductDetalle fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
                  .always(function(){   });
              }
              
            })
            .fail(function( jqXHR, textStatus ) {  console.log("getTblproductoDetalleProducto fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
            .always(function(){  /*console.log("always");*/ });
          
          //FIN COMIENZA CON LA ELIMINACION DE LAS BASES DE DATOS
        })
        .fail(function( jqXHR, textStatus ) {  console.log("getAllTblproductImgProducto fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  /*console.log("getAllTblproductImgProducto always");*/ });

        /*
    }
    
    
    else
    {
      alert('nada');
    }
    */
  }
  function eliminarProductoCotizador(idtblproductcotizador){
      /*
      Recibir el id del producto general tblproducto
      ver cuantos productos detalles existe de este producto
      si productos detalle es solo 1
      si existe solo este eliminar el producto (en cascada se elimianr los productos detalle y las imagenes)
      SiNo solo elimianr el producto que esta  seleccionando
      */
      /////////////////////////////////////////////////////////
      var arregloIdtblproductimg=[];
      var arregloTblproductimg_srcimg=[];
      //SOLICITAMOS TODOS LOS REGISTROS DE IMANGENES DE UN PRODUCTO
      $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/getAllTblproductcotimg.php",  data: {solicitadoBy:"WEB",idtblproductcotizador:idtblproductcotizador} })
        .done(function( msgTblProductoImg )
        {
          //OBTENEMOS TODOS LOS REGISTROS 
          $.each(msgTblProductoImg.datos, function(i,item){
            //GUARDAMOS EL ID DEL LA IAMGEN EN EL ARREGLO
            arregloIdtblproductimg.push(msgTblProductoImg.datos[i].idtblproductcotimg);
            //GUARDAMOS EL NOMBRE DE LA IAMGEN EN EL ARREGLO
            arregloTblproductimg_srcimg.push(msgTblProductoImg.datos[i].tblproductcotimg_srcimg);
            //alert('msgTblProductoImg.datos[i].tblproductcotimg_srcimg::'+msgTblProductoImg.datos[i].tblproductcotimg_srcimg);
          });          
          //RECORREMOS EL ARREGLO DE LOS ID
          $.each(arregloIdtblproductimg, function(i,item){
            //SOLICITAMOS BORRAR TODOS LOS ARCHIVOS FISICOS
            //alert('entro al each i::'+i+' item::'+item+' arregloTblproductimg_srcimg[i]::'+arregloTblproductimg_srcimg[i]);
            
            $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteFileImgProductoCotizador.php",  data: {solicitadoBy:"WEB",tblproductimg_srcimg:arregloTblproductimg_srcimg[i]} })
              .done(function( datos ){ 
                //alert('done datos.datos::'+datos.datos+' datos.success::'+datos.success);
              })
              .fail(function( jqXHR, textStatus ) {  console.log("setDeleteFileImgProducto  fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
              .always(function(){   });
            
          });
          //COMIENZA CON LA ELIMINACION DE LAS BASES DE DATOS
          //
          //ELIMINAR DESDE EL PRODUCTO COTIZADOR
          console.log('ELIMINAR DESDE EL PRODUCTO');
          //alert('setDeleteTblproductcotizador idtblproductcotizador::'+idtblproductcotizador)
          
          $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteTblproductcotizador.php",  data: {solicitadoBy:"WEB",idtblproductcotizador:idtblproductcotizador}  })
            .done(function( msgTblProducto ) {
              UIkit.modal.alert('Elimnación Exitosa');
              //$('#productoslineaPlantilla').html("");
              //cargarValoresDefault();
              $('#productosComplementarioPlantilla').html("");
              $('#productoscotizadorPlantilla').html("");
              $('#productoslineaPlantilla').html("");
              cargarValoresDefault();
            })
            .fail(function( jqXHR, textStatus ) {  console.log("setDeleteTblproducto fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
            .always(function(){   });
            
          //FIN COMIENZA CON LA ELIMINACION DE LAS BASES DE DATOS
        })
        .fail(function( jqXHR, textStatus ) {  console.log("getAllTblproductImgProducto fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  /*console.log("getAllTblproductImgProducto always");*/ });
    
  }
  function eliminarProductoComplementario(idProducto){
    //UIkit.modal.confirm('Realmente deseas eliminar el producto Complementario?', function(){  respuesta=true;  });
    //if (respuesta == true) {
      //srcimgActual=$("#fotografia_complementario_actual").val();
      srcimgActual=$("#imagenPortadaProductoComplementario"+idProducto).attr("src");
      srcimgActual=srcimgActual.replace('./../assests_general/productos/complementario/', '');

      //borramos la actual file de la fotografia del servidor
      $.ajax({ method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteFileImgProductoComplementario.php",  data: {solicitadoBy:"WEB",tblproductimg_srcimg:srcimgActual} })
        .done(function( datos ){
          console.log('setDeleteFileImgProductoComplementario datos::'+datos.datos);

          $.ajax({  method: "POST",  dataType: "json",  url: "./../../controllers/setDeleteTblproductcomplem.php",  data: {solicitadoBy:"WEB",idtblproductcomplem:idProducto}  })
            .done(function( msgTblProductoComplementario ) {
              UIkit.modal.alert('Elimnación Exitosa');
              $('#productoslineaPlantilla').html("");
              $('#productoscotizadorPlantilla').html("");
              $('#productosComplementarioPlantilla').html("");
              cargarValoresDefault();
            })
            .fail(function( jqXHR, textStatus ) {  console.log("setDeleteTblproductcomplem fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
            .always(function(){   });

        })
        .fail(function( jqXHR, textStatus ) {  console.log("setDeleteFileImgProductoCotizador  fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  
        //console.log("setDeleteFileImgProductoCotizador  always");
         });

      /*
    }else{
      alert('no hacer nada');
    }
    */
  }
  /*
  FIN FUNCIONES MIGUEL
   */

function llenarDatosCalendario(){
  console.log("CreandoArchivo");
  $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/setCalendario.php",  
      data: {idtblproveedor:idtblproveedor}})
    .done(function( msg) {  
        console.log(msg);
    })
    .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
    .always(function(){  console.log("always");  });
    setTimeout('',1500);

}

function cargaCalendario(){
  setTimeout('',1500);
  nombrearchivo='calendarioproveedor_'+idtblproveedor+'.json';
  console.log(nombrearchivo);

  $("#calendar_selectable").fullCalendar({
     header: {
          left: 'today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay prev,next'
      },
      buttonIcons: {
          prev: 'md-left-single-arrow',
          next: 'md-right-single-arrow',
          prevYear: 'md-left-double-arrow',
          nextYear: 'md-right-double-arrow'
      },
      buttonText: {
          today: ' ',
          month: ' ',
          week: ' ',
          day: ' '
      },
      aspectRatio: 2.1,
      defaultDate: moment(),
      eventLimit: true,
      timeFormat: 'H(:mm)',
      events: "./assets/calendariojson/"+nombrearchivo,
      eventClick: function(calEvent, jsEvent, view) {
        if(calEvent.tipo==1){
          UIkit.switcher('#tabs_1').show(1);
        }else{
          UIkit.switcher('#tabs_1').show(3);
        }
      }
    });


}


function indicadoresIndex(){

  var numCotizaciones=0;
  var ventasProductos=0;
  var ventasTotal=0;
  
  ////////////// Indicador de Numero de Ordenes //////////////

  $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getNumeroOrdenes.php",  
      data: {solicitadoBy:solicitadoBy,idtblproveedor:idtblproveedor}})
    .done(function( msg9) {

      if(parseInt(msg9.success)==1){ $("#indicadorNumeroPedidos").text(msg9.datos);}
     
    })
    .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
    .always(function(){  console.log("always");  });

  //////////////////////////////////////////////////////

  //////////////  Indicador de Numero de Cotizaciones  //////////////

  $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getNumeroCotizaciones.php",  
      data: {solicitadoBy:solicitadoBy,idtblproveedor:idtblproveedor}})
    .done(function(msg) {
      if(parseInt(msg.success)==1){
        numCotizaciones = numCotizaciones+(parseInt(msg.datos));
        $("#indicadorNumeroCotizaciones").text(numCotizaciones);
      }
    })
    .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
    .always(function(){  console.log("always");  });

  //////////////////////////////////////////////////////

  //////////////  Indicador de Numero de Cotizaciones  //////////////

  $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getNumeroCotizacionesNuevos.php",  
      data: {solicitadoBy:solicitadoBy}})
    .done(function(msg) {
      if(parseInt(msg.success)==1){
      numCotizaciones = numCotizaciones+(parseInt(msg.datos));
      $("#indicadorNumeroCotizaciones").text(numCotizaciones);
      }
    })
    .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
    .always(function(){  console.log("always");  });

  //////////////////////////////////////////////////////

  //////////////   Indicador de Ventas //////////////

    $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getNumeroVentas.php",  
      data: {solicitadoBy:solicitadoBy,idtblproveedor:idtblproveedor}})
    .done(function(msg) {
      $.each(msg.datos, function(i,item){
        ventasProductos =((parseInt(item.tblcarritoproduct_cantidad))*(item.tblcarritoproduct_preciobp));    
        ventasTotal=ventasTotal + ventasProductos;
        $("#indicadorVentas").text(ventasTotal.toFixed(2));
      });  
    })
    .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
    .always(function(){  console.log("always");  });

    $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getNumeroVentasComplementarios.php",  
      data: {solicitadoBy:solicitadoBy,idtblproveedor:idtblproveedor}})
    .done(function(msg) {
      $.each(msg.datos, function(i,item){
        ventasProductosComplem =((parseInt(item.tblcarritoproductcomplem_cantidad))*(item.tblcarritoproductcomplem_preciobp));    
        ventasTotal=ventasTotal + ventasProductosComplem;
        $("#indicadorVentas").text(ventasTotal.toFixed(2));
      });  
    })
    .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
    .always(function(){  console.log("always");  });

  //////////////////////////////////////////////////////

  //////////////  Indicador Dias de Pedido //////////////

    $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getTblproveedorstatuspaquete2.php",  
      data: {solicitadoBy:solicitadoBy,idtblproveedor:idtblproveedor}})
    .done(function(msg) {
      $.each(msg.datos, function(i,item){
          $("#idicadorDiasPaquete").text(item.tblproveedorstatuspaquete_diastranscurridos);
      });

    })
    .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
    .always(function(){  console.log("always");  });

    //////////////////////////////////////////////////////

}

//inicializa las tablas para poder realizar filtros 
function inicializarTablas(){
  $("#tbl_ordenes").tablesorter({
    sortList: [[1,0]], //ordenar por de inicio esa columna 
    headers: {1: { sorter: "shortDate", dateFormat: "ddmmyyyy" } }, //cambio de formato de fecha 
    widgets: ['filter']//activar el widget de filtro de busqueda
  });

  $("#tbl_ordenespendiente").tablesorter({
    sortList: [[1,0]] ,
    headers: {1: { sorter: "shortDate", dateFormat: "ddmmyyyy" } },
    widgets: ['filter'], 
  });

  $("#tbl_ordeneshistorial").tablesorter({
    sortList: [[0,0]] ,
    headers: {1: {sorter: 'digit'} ,
              2: { sorter: "shortDate", dateFormat: "ddmmyyyy" }
              },
    widgets: ['filter'],});

}

//funcion para mostrar los registros en las tablas de Ordenes
function mostrarListaOrdenes(){
  
  //inicializa las tablas para poder realizar filtros 
  inicializarTablas();

//AJAX encargado de solicitar las ordenes del proveedor  
    $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getAllTblordencompraByTbldatosenvio.php",  
      data: {solicitadoBy:solicitadoBy, idproveedor:idtblproveedor}  })
    .done(function( msg ) {
      $.each(msg.datos, function(i,item){   
        
        idtblordencompra = item.idtblordencompra;//id de la orden

        $.ajax({//Checar para ver si existe un registro de tblentregaprodruct
          method: "POST",  
          dataType: "json",  
          url: "./../../controllers/getTblentregaproducto.php",  
          data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
            .done(function( msg2 ){
              if(parseInt(msg2.success)==1){//si es exitoso entoces esta entregado
                console.log("Probablemente ENTREGADO");
                $.each(msg2.datos, function(x,item){
                     //si el status es diferente de Entregado entonce entra como ordenPendiente 
                   if(msg2.datos[x].tblentregaproducto_status!="ENTREGADO"){
                    //cambio de formato de fechas compra y agendado
                    fchordencompra= msg.datos[i].tblordencompra_fchordencompra;
                    fchordencompra = fchordencompra.split("-");
                    fchordencompra = fchordencompra[2]+"/"+fchordencompra[1]+"/"+fchordencompra[0];
                    fchagendado= msg.datos[i].tbldatosenvio_fchagendado;
                    fchagendado = fchagendado.split("-");
                    fchagendado = fchagendado[2]+"/"+fchagendado[1]+"/"+fchagendado[0];
                    
                    //se añade a la tabla Ordenes Pendiente la fila con los campos  
                    $("#tblordenespendiente_item").append(
                      '<tr data-uk-modal="{target:'+"'#detalleOrdenPendiente'"+', bgclose:false,modal:false, }" onclick="datosDetalleOrden('+msg.datos[i].idtblordencompra+','+tabla_OrdenesPendiente+')"><td class="uk-text-center">'+msg.datos[i].idtblordencompra+
                      '</td><td class="uk-text-center">'+fchagendado+
                      '</td></tr>');
                    $("#tbl_ordenespendiente").trigger('updateAll', [true]);//actualiza tabla

                   }else {//Orden entregada
                  //cambio de formato de fechas  pagoproveedor
                  fchpagoproveedor= msg2.datos[x].tblentregaproducto_fchpagoproveedor;
                  fchpagoproveedor = fchpagoproveedor.split("-");
                  fchpagoproveedor = fchpagoproveedor[2]+"/"+fchpagoproveedor[1]+"/"+fchpagoproveedor[0];
                  //se añade a la tabla Ordenes Hostorial la fila con los campos  
                  $("#tblordeneshistorial_item").append(
                  '<tr data-uk-modal="{target:'+"'#detalleOrdenPendiente'"+', bgclose:false,modal:false, }" onclick="datosDetalleOrden('+msg.datos[i].idtblordencompra+','+tabla_OrdenesHistorial+')"><td class="uk-text-center">'+msg.datos[i].idtblordencompra+
                  '</td><td class="uk-text-center">$<span name="totaltabla'+i+'" id="totaltabla'+i+'"></span</td><td class="uk-text-center">'+fchpagoproveedor+'</td><td class="uk-text-center" id="tblstatusdeposito'+i+'"></td></tr>');
                  


                  if(msg2.datos[x].tblentregaproducto_statusdeposito!="PENDIENTE"){
                      $('#tblstatusdeposito'+i).append('<span class="uk-badge uk-badge-success">'+msg2.datos[x].tblentregaproducto_statusdeposito+'</span>');
                    }else { 
                       $('#tblstatusdeposito'+i).append('<span class="uk-badge uk-badge-warning">'+msg2.datos[x].tblentregaproducto_statusdeposito+'</span>');
                     }
                  //funcion para calcular el Total de la Orden 
                  totalCompra(msg.datos[i].idtblordencompra,i);

                  $("#tbl_ordeneshistorial").trigger('updateAll', [true]);//actualiza tabla
                 }
                });
              }else {
                console.log("AUN NO ESTA ENTREGADO");
                //cambio de formato de fechas compra y agendado
                fchordencompra= msg.datos[i].tblordencompra_fchordencompra;
                fchordencompra = fchordencompra.split("-");
                fchordencompra = fchordencompra[2]+"/"+fchordencompra[1]+"/"+fchordencompra[0];
                fchagendado= msg.datos[i].tbldatosenvio_fchagendado;
                fchagendado = fchagendado.split("-");
                fchagendado = fchagendado[2]+"/"+fchagendado[1]+"/"+fchagendado[0];
                
                //se añade a la tabla Ordenes la fila con los campos  
                $("#tblordenes_item").append(
                  '<tr data-uk-modal="{target:'+"'#detalleOrdenPendiente'"+', bgclose:false,modal:false, }" onclick="datosDetalleOrden('+msg.datos[i].idtblordencompra+','+tabla_Ordenes+')"><td class="uk-text-center">'+msg.datos[i].idtblordencompra+
                  '</td><td class="uk-text-center">'+fchagendado+ '</td></tr>');
                $("#tbl_ordenes").trigger('updateAll', [true]);//actualiza tabla
              }

            
            }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always");  });

      });
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always");  });
}
//funcion para calcular el total de la orden y colocarlo en la tabla
function totalCompra(idtblordencompra,x){
   var totalproveedor =0;
   var subtotal=0;
   var subtotalcomplem=0;

  $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getAllTblcarritoproductByTblordencompra.php",  
      data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
        .done(function(msg4) {
        $.each(msg4.datos, function(i4,item){
          subtotal = (parseInt(msg4.datos[i4].tblcarritoproduct_cantidad))*(parseFloat(msg4.datos[i4].tblcarritoproduct_preciobp));
          totalproveedor = totalproveedor + subtotal;
          console.log("TOTAL"+totalproveedor); 
        });

      $('#totaltabla'+x).text(totalproveedor);
      $("#tbl_ordeneshistorial").trigger('updateAll', [true]);  
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });


    $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getCheckTblcarritoproductcomplemByTblordencompra.php",  
      data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra}})
        .done(function(msg) {
        if (parseInt(msg.success)==1) {

          $.ajax({
            method: "POST",  
            dataType: "json",  
            url: "./../../controllers/getAllTblcarritoproductcomplemByTblordencompra.php",  
            data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
              .done(function(msg7) {
              $.each(msg7.datos, function(i,item){
                subtotalcomplem = (parseInt(msg7.datos[i].tblcarritoproductcomplem_cantidad))*(parseFloat(msg7.datos[i].tblcarritoproductcomplem_preciobp));

        totalproveedor = totalproveedor + subtotalcomplem;
          console.log("TOTAL"+totalproveedor); 
        });
          $('#totaltabla'+x).text(totalproveedor); 
           $("#tbl_ordeneshistorial").trigger('updateAll', [true]);   
          }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
        
        }
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

}
//Funcion para llenar el pop con los detalles de la orden seleccionada
function datosDetalleOrden(idtblordencompra,idTabla){
  
  var totalproveedor = 0;
  nombreservicioTienda='Entrega en Tienda';//para hacer una comparacion con el tipo de servicio
  var productosComplem=false;   
 var intProducts; //lleva el conteo de los productos de la orden 
 var intProductsComplem; //lleva el conteo de los productos complementarios la orden 

  $("#datosfactura").empty();//limpiar la lista de datos de factura
  $("#ordencompra_listaproductos").empty();//limpiar la lista de productos
  $("#datoscliente_envio").empty();//limpia los datos de envio
  $("#botondeubicacion").empty();//limpia el boton de ubicacion 
  $("#marcarorden").empty();//limpia el boton de marcar como entregada
  $("#entregaEvidencia").empty();//limpia el form de evidencias
  
  
  //datos del cliente 
  $.ajax({
   method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getTblordencompra.php",  
    data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra}})
     .done(function(msg7) {
     $.each(msg7.datos, function(i,item){
       $("#numerodeordenpendiente").text('Orden No.'+ item.idtblordencompra);
       $("#ordenactual_nombrecliente").text(item.tblordencompra_nombrecliente);
       idcliente= item.tblcliente_idtblcliente;
       facturacion = item.tblordencompra_facturacion;

       //cambio de formato de fecha
      fchordencompra= msg7.datos[i].tblordencompra_fchordencompra;
      fchordencompra = fchordencompra.split("-");
      fchordencompra = fchordencompra[2]+"/"+fchordencompra[1]+"/"+fchordencompra[0];
      $("#ordenactual_fchcompra").text(fchordencompra);

     });
    $.ajax({  
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getTblcliente.php",  
      data: {solicitadoBy:solicitadoBy, idtblcliente:idcliente} })
    .done(function( msg2 ) { 
      $.each(msg2.datos, function(i2,item2){
        $("#ordenactual_emailcliente").text(msg2.datos[i2].tblcliente_email);
        $("#ordenactual_numtelcliente").text(msg2.datos[i2].tblcliente_telefono);
          if(facturacion==1){//datos que se requieren para facturacion
            $("#ordenactual_factura").text("Requiere Factura");
              //ciudad
              $("#datosfactura").append('<li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE55A;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg2.datos[i2].tblcliente_ciudad+'</span><span class="uk-text-small uk-text-muted">Ciudad</span></div></li>');
              //direccion, colonia y codipostal
              $("#datosfactura").append('<li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE88A;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg2.datos[i2].tblcliente_callenum+'</span><span class="md-list-heading">Colonia: '+msg2.datos[i2].tblcliente_colonia+'</span><span class="md-list-heading">CodigoPostal:'+msg2.datos[i2].tblcliente_codipost+'</span><span class="uk-text-small uk-text-muted">Dirección</span></div></li>');
              //RFC
              $("#datosfactura").append('<li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE90D;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg2.datos[i2].tblcliente_rfc+'</span><span class="uk-text-small uk-text-muted">RFC</span></div></li>');
          }else {$("#ordenactual_factura").text("NO Requiere Factura");}
      });
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
  }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

  //Datos de Productos
  $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getAllTblcarritoproductByTblordencompra.php",  
      data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
        .done(function(msg4) {
        $.each(msg4.datos, function(i4,item){
          subtotal=0;
          $("#ordencompra_listaproductos").append('<br/><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE7E9;</i></div><div class="md-list-content"><span class="md-list-heading">'+ msg4.datos[i4].tblcarritoproduct_nombreproducto +'</span><span class="uk-text-small uk-text-muted">Nombre de Producto</span></div></li><li id="prod'+i4+'"><span class="uk-text-small uk-text-muted">Caracteristicas</span><br/></li><li id="personali'+i4+'"></li><li><div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin><div class="uk-width-large-1-2"><div class="md-list-content" id="cantidadP'+i4+'"></div></div><div class="uk-width-large-1-2"><div class="md-list-content" id="precioIndividual'+i4+'"></div></div></li>');

            iddetalleproducto = msg4.datos[i4].tblcarritoproduct_idtblproductdetalle.toString();

            $.ajax({//detalle de cada producto de acuerdo
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getTblproductoDetalle.php",  
      data: {solicitadoBy:solicitadoBy, idtblproductdetalle:iddetalleproducto}  })
     .done(function( msg5 ) {
      console.log("getTblproductoDetalle");
      console.log(msg5);
      $.each(msg5.datos, function(i5,item5){
        if(msg5.datos[i5].tblproductdetalle_diametro!=null){
          $("#prod"+i4).append('<span class="md-list-heading">'+msg5.datos[i5].tblproductdetalle_diametro+' cm</span><br/>');
        }
        if(msg5.datos[i5].tblproductdetalle_largo!=null && msg5.datos[i5].tblproductdetalle_ancho!=null){
          $("#prod"+i4).append('<span class="md-list-heading">'+msg5.datos[i5].tblproductdetalle_largo+' cm x '+ msg5.datos[i5].tblproductdetalle_ancho+' cm </span><br/>');
        }
        if(msg5.datos[i5].tblproductdetalle_piezas!=null){
          $("#prod"+i4).append('<span class="md-list-heading">'+msg5.datos[i5].tblproductdetalle_piezas+' piezas</span><br/>');
        }

        idtblespecificingre = msg5.datos[i5].tblespecificingrediente_idtblespecificingrediente.toString();
        $.ajax({//muestra el ingrediente especifico 
          method: "POST",  
          dataType: "json",  
          url: "./../../controllers/getTblespecificingrediente.php",  
          data: {solicitadoBy:solicitadoBy, idtblespecificingrediente:idtblespecificingre}  })
        .done(function( msg6) {  
          $.each(msg6.datos, function(i6,item6){
           $("#prod"+i4).append('<span class="md-list-heading">Especificacón: '+msg6.datos[i6].tblespecificingrediente_nombre+' </span><br/>')}
           );
        })
        .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  console.log("always");  });

      });
    })
     .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
     .always(function(){  console.log("always");  });

     if(msg4.datos[i4].tblcarritoproduct_personalizar!=null){
      $("#personali"+i4).append('<span class="uk-text-small uk-text-muted">Personalización o Mensaje</span><br/><span class="md-list-heading">'+msg4.datos[i4].tblcarritoproduct_personalizar+'</span>');
    }else {$("#personali"+i4).remove();}

    $("#cantidadP"+i4).append('<span class="md-list-heading">'+msg4.datos[i4].tblcarritoproduct_cantidad+'</span><br/><span class="uk-text-small uk-text-muted"><i class="md-list-addon-icon material-icons">&#xE547;</i>Cantidad</span>');
    $("#precioIndividual"+i4).append('<span class="md-list-heading">'+msg4.datos[i4].tblcarritoproduct_preciobp +'</span><br/><span class="uk-text-small uk-text-muted"><i class="material-icons">&#xE263;</i>Precio</span>');

    subtotal = (parseInt(msg4.datos[i4].tblcarritoproduct_cantidad))*(parseFloat(msg4.datos[i4].tblcarritoproduct_preciobp));
    totalproveedor = totalproveedor + subtotal; 
    intProducts = intProducts + parseInt(msg4.datos[i4].tblcarritoproduct_cantidad); 
    console.log("PRODUCTOS: "+ intProducts);
        });
  $("#ordenactual_totalcompra").text((totalproveedor).toFixed(2));
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

  $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getCheckTblcarritoproductcomplemByTblordencompra.php",  
      data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra}})
        .done(function(msg) {
        if (parseInt(msg.success)==1) {
          productosComplem=true;
          $.ajax({
            method: "POST",  
            dataType: "json",  
            url: "./../../controllers/getAllTblcarritoproductcomplemByTblordencompra.php",  
            data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
              .done(function(msg7) {
              $.each(msg7.datos, function(i,item){
                subtotalcomplem=0;
                $("#ordencompra_listaproductos").append('<br/><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE146;</i></div><div class="md-list-content"><span class="md-list-heading">ID['+msg7.datos[i].tblcarritoproductcomplem_idtblproductcomplem +']:  '+ msg7.datos[i].tblcarritoproductcomplem_nombreproducto +'</span><span class="uk-text-small uk-text-muted">Nombre de Producto Complementario</span></div></li><li><div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin><div class="uk-width-large-1-2"><div class="md-list-content"><span class="md-list-heading">'+msg7.datos[i].tblcarritoproductcomplem_cantidad+'</span><br/><span class="uk-text-small uk-text-muted"><i class="md-list-addon-icon material-icons">&#xE547;</i>Cantidad</span></div></div><div class="uk-width-large-1-2"><div class="md-list-content" ><span class="md-list-heading">'+msg7.datos[i].tblcarritoproductcomplem_preciobp +'</span><br/><span class="uk-text-small uk-text-muted"><i class="material-icons">&#xE263;</i>Precio</span></div></div></li>');

                subtotalcomplem = (parseInt(msg7.datos[i].tblcarritoproductcomplem_cantidad))*(parseFloat(msg7.datos[i].tblcarritoproductcomplem_preciobp));

                totalproveedor = totalproveedor + subtotalcomplem;
                
              });
              $("#ordenactual_totalcompra").text((totalproveedor).toFixed(2));   
              }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
        }else {productosComplem=false;}
      }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

    $.ajax({//datos de envio de la orden
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getTbldatosenvio.php",  
      data: {solicitadoBy:solicitadoBy, idtblordencompra:idtblordencompra}  })
    .done(function( msg3 ) { 
      $.each(msg3.datos, function(i3,item3){

      fchagendado= msg3.datos[i3].tbldatosenvio_fchagendado;
      fchagendado = fchagendado.split("-");
      fchagendado = fchagendado[2]+"/"+fchagendado[1]+"/"+fchagendado[0];

      $("#ordenactual_fchagendado").text(fchagendado);
      $("#ordenactual_horaentrega").text(msg3.datos[i3].tbldatosenvio_horaagendado);

      //entregaentienda    
      if(msg3.datos[i3].tbldatosenvio_tipodeservicio == nombreservicioTienda){
        $("#ordenactual_tipodeentrega").text(msg3.datos[i3].tbldatosenvio_tipodeservicio);
    }else{
      $("#ordenactual_tipodeentrega").text(msg3.datos[i3].tbldatosenvio_tipodeservicio);
      $("#datoscliente_envio").append('<li><div class="md-list-addon-element"><i class="md-list-addon-icon  material-icons">&#xE55F;</i></div><div class="md-list-content"><span class="md-list-heading" id="dirCompletaOrden">'+msg3.datos[i3].tbldatosenvio_pais+", "+msg3.datos[i3].tbldatosenvio_ciudad+", "+msg3.datos[i3].tbldatosenvio_calle+" "+msg3.datos[i3].tbldatosenvio_numint+",Col."+msg3.datos[i3].tbldatosenvio_colonia+",CP "+msg3.datos[i3].tbldatosenvio_codipost+'</span><span class="uk-text-small uk-text-muted">Dirección</span></div></li>');//
       $("#botondeubicacion").append('<button class="md-btn md-btn-primary md-btn-block md-btn-wave-light" onclick="mapaGeo('+0+','+idmapaOrdenes+')" type="button"  data-uk-modal="{target:'+"'#mapa'"+',modal: false,bgclose:false}"> Ubicacion de Entrega en Mapa</button>');
    }

    $("#ordenactual_personarecibeentrega").text(msg3.datos[i3].tbldatosenvio_nombrerecibe);
    $("#ordenactual_telefonorecibeentrega").text(msg3.datos[i3].tbldatosenvio_celularrecibe);   
    })
  }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
  .always(function(){  console.log("always");  });

  if(idTabla==tabla_Ordenes){
  console.log("TABLA ORDENES");
  //se añade el boton al detalledeorden 
  $("#marcarorden").append('<button class="md-btn md-btn-primary md-btn-block md-btn-wave-light" data-uk-modal="{target:'+"'#popup_marcarorden'"+', bgclose:false}" onclick="botonMarcarStatus('+idtblordencompra+')">MARCAR COMO ORDEN ENTREGADA</button>');
  }
  if(idTabla==tabla_OrdenesPendiente){
  console.log("TABLA ORDENES PENDIENTE");
  $("#marcarorden").append('<button class="md-btn md-bg-red-A700 md-color-deep-purple-50 md-btn-block" data-uk-modal="{target:'+"'#popupmodif_marcarorden'"+', bgclose:false}" onclick="modificarStatus('+idtblordencompra+')">MODIFICAR STATUS DE ENTREGA</button>');


  $.ajax({//se obtiene datos del producto
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getTblentregaproducto.php",  
    data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
    .done(function( msg9) {
      console.log("ENTREGA");
      console.log(msg9);
      $.each(msg9.datos, function(i,item3){


      //se añade al popupdedetalleorden la visualizacion de los datos de evidencias (imgs)
      $("#entregaEvidencia").append('<div class="uk-grid uk-grid-medium" data-uk-grid-margin><div class="uk-width-1-1"><div class="md-card"><div class="md-card-toolbar"><h2 class=" uk-text-large uk-text-middle uk-text-bold">Evidencias de Orden Entregada</h2></div><div class="md-card-content large-padding"><div class="uk-grid "></div><div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin><div class="uk-width-large-1-2"><h4 class="heading_c uk-margin-small-bottom"> Información </h4><div class="uk-form-row"><ul class="md-list md-list-addon"><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE877;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg9.datos[i].tblentregaproducto_status+' </span><span class="uk-text-small uk-text-muted">Status del Pedido</span></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE002;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg9.datos[i].tblentregaproducto_descripcion+' </span><span class="uk-text-small uk-text-muted">Observacion de Entrega</span></div></li></ul></div></div><div class="uk-width-large-1-2"><h4 class="heading_c uk-margin-small-bottom">Evidencias de Entrega </h4><div class="uk-grid uk-grid-medium" data-uk-grid-margin><div class="uk-width-large-1-2" id="imgcomplem1"><div class="md-card-head uk-text-center uk-position-relative"><div class="md-card-head uk-text-center uk-position-relative"><img class="md-card-head-img" src="assets/img/evidencias/'+msg9.datos[i].tblentregaproducto_srcimgevidencia1+'" /></div></div></div><div class="uk-width-large-1-2" id="imgcomplem2"><div class="md-card-head uk-text-center uk-position-relative"><img class="md-card-head-img" src="assets/img/evidencias/'+msg9.datos[i].tblentregaproducto_srcimgevidencia2+'" /></div></div></div></div></div></div></div></div></div>');


      });


      if(productosComplem){
      $.ajax({
        method: "POST",  
        dataType: "json",  
        url: "./../../controllers/getTblentregacomplem.php",  
        data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
       .done(function( msg10) {
           $.each(msg10.datos, function(i,item){
             $("#imgcomplem1").append('<div class="md-card-head uk-text-center uk-position-relative" ><div class="md-card-head uk-text-center uk-position-relative"><img class="md-card-head-img" src="assets/img/evidencias/'+msg10.datos[i].tblentregacomplem_srcimgevidencia1+'" /></div></div>');                             
             $("#imgcomplem2").append('<div class="md-card-head uk-text-center uk-position-relative" ><div class="md-card-head uk-text-center uk-position-relative"><img class="md-card-head-img" src="assets/img/evidencias/'+msg10.datos[i].tblentregacomplem_srcimgevidencia2+'" /></div></div>');
           });
        })
        .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  console.log("always");  });
     }
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always");  });





  }

  if(idTabla==tabla_OrdenesHistorial){
  console.log("TABLA ORDENES HISTORIAL");

  $.ajax({//se obtiene datos del producto
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getTblentregaproducto.php",  
    data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
    .done(function( msg9) {
      console.log("ENTREGA");
      console.log(msg9);
      $.each(msg9.datos, function(i,item3){
      //cambio de formato de fechas
      fchpagoproveedor= msg9.datos[i].tblentregaproducto_fchpagoproveedor;
      fchpagoproveedor = fchpagoproveedor.split("-");
      fchpagoproveedor = fchpagoproveedor[2]+"/"+fchpagoproveedor[1]+"/"+fchpagoproveedor[0];


      //se añade al popupdedetalleorden la visualizacion de los datos de evidencias (imgs)
      $("#entregaEvidencia").append('<div class="uk-grid uk-grid-medium" data-uk-grid-margin><div class="uk-width-1-1"><div class="md-card"><div class="md-card-toolbar"><h2 class=" uk-text-large uk-text-middle uk-text-bold">Evidencias de Orden Entregada</h2></div><div class="md-card-content large-padding"><div class="uk-grid "></div><div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin><div class="uk-width-large-1-2"><h4 class="heading_c uk-margin-small-bottom"> Información </h4><div class="uk-form-row"><ul class="md-list md-list-addon"><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE877;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg9.datos[i].tblentregaproducto_status+' </span><span class="uk-text-small uk-text-muted">Status del Pedido</span></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE8DF;</i></div><div class="md-list-content"><span class="md-list-heading">'+fchpagoproveedor+' </span><span class="uk-text-small uk-text-muted">Fecha de Deposito </span></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE002;</i></div><div class="md-list-content"><span class="md-list-heading uk-float-left" id="statusdeposito"></span><br/><span class="uk-text-small uk-text-muted">Status de Deposito</span></div></li></ul></div></div><div class="uk-width-large-1-2"><h4 class="heading_c uk-margin-small-bottom">Evidencias de Entrega </h4><div class="uk-grid uk-grid-medium" data-uk-grid-margin><div class="uk-width-large-1-2" id="imgcomplem1"><div class="md-card-head uk-text-center uk-position-relative"><div class="md-card-head uk-text-center uk-position-relative"><img class="md-card-head-img" src="assets/img/evidencias/'+msg9.datos[i].tblentregaproducto_srcimgevidencia1+'" /></div></div></div><div class="uk-width-large-1-2" id="imgcomplem2"><div class="md-card-head uk-text-center uk-position-relative"><img class="md-card-head-img" src="assets/img/evidencias/'+msg9.datos[i].tblentregaproducto_srcimgevidencia2+'" /></div></div></div></div></div></div></div></div></div>');

      if(msg9.datos[i].tblentregaproducto_statusdeposito!="PENDIENTE"){
        $('#statusdeposito').append('<span class="uk-badge uk-badge-success">'+msg9.datos[i].tblentregaproducto_statusdeposito+'</span>');
      }else {$('#statusdeposito').append('<span class="uk-badge uk-badge-warning">'+msg9.datos[i].tblentregaproducto_statusdeposito+'</span>');}


      });


      if(productosComplem){
      $.ajax({
        method: "POST",  
        dataType: "json",  
        url: "./../../controllers/getTblentregacomplem.php",  
        data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
       .done(function( msg10) {
           $.each(msg10.datos, function(i,item){
             $("#imgcomplem1").append('<div class="md-card-head uk-text-center uk-position-relative" ><div class="md-card-head uk-text-center uk-position-relative"><img class="md-card-head-img" src="assets/img/evidencias/'+msg10.datos[i].tblentregacomplem_srcimgevidencia1+'" /></div></div>');                             
             $("#imgcomplem2").append('<div class="md-card-head uk-text-center uk-position-relative" ><div class="md-card-head uk-text-center uk-position-relative"><img class="md-card-head-img" src="assets/img/evidencias/'+msg10.datos[i].tblentregacomplem_srcimgevidencia2+'" /></div></div>');
           });
        })
        .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
        .always(function(){  console.log("always");  });
     }
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always");  });
  }

}

//funcion para marcar el status de la orden (BOTON)
function botonMarcarStatus(idtblordencompra){
  
  $('#formevidenciaProductos')[0].reset();
  $("#entrega_complementariosform").hide();  
  $("#li_descripcionPendiente").hide();


 totalProductos=0;
 totalProductosComplem=0;

  $("#entrega_idorden").text(idtblordencompra);

  $.ajax({//se obtiene la fecha 
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getFecha.php",  
    data: {solicitadoBy:solicitadoBy}})
    .done(function( msg9) {
      fch= msg9.datos;
      fch = fch.split("/");
      fchen = fch[2]+"/"+fch[1]+"/"+fch[0];
      $("#entrega_fchentrega").text(fchen);
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always");  });

    $.ajax({//se obtiene la fecha 
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getAllTblcarritoproductByTblordencompra.php",  
    data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
    .done(function( msg) {
      $.each(msg.datos, function(i,item){
        totalProductos = totalProductos + parseInt(msg.datos[i].tblcarritoproduct_cantidad); 
      });
       $("#entrega_noproductpedido").text(totalProductos);
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always");  });

    $.ajax({
      method: "POST",  
      dataType: "json",  
      url: "./../../controllers/getCheckTblcarritoproductcomplemByTblordencompra.php",  
      data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra}})
        .done(function(msg) {
        if (parseInt(msg.success)==1) {
          $("#entrega_complementariosform").show();


          $.ajax({
            method: "POST",  
            dataType: "json",  
            url: "./../../controllers/getAllTblcarritoproductcomplemByTblordencompra.php",  
            data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
              .done(function(msg7) {
              $.each(msg7.datos, function(i,item){
                totalProductosComplem = totalProductosComplem + parseInt(msg7.datos[i].tblcarritoproductcomplem_cantidad);                
              });
              $("#entrega_nocomplempedidos").text(totalProductosComplem);   
              }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
        }else {productosComplem=false;}
      }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

}

//funcion para ingresar los registros del status de la orden 
function marcarordenEntregada(){

  var boleanComplementarios= false; 
  var boleanVerificacionProductos= false;
  var boleanVerificacionComplementarios= false;
  var boleanStatus= false;
  var boleanDescripcioStatus=false;

  //obtiene los datos que se requieren
  idorden= document.getElementById("entrega_idorden").innerHTML;
  idproveedor = idtblproveedor;
  nombreproveedor = tblproveedorNombre;
  numproductos = document.getElementById("entrega_noproductpedido").innerHTML;
  numproductosentregados = numproductos; 
  status = $("#entrega_statusentrega").val();
  fchentrega = document.getElementById("entrega_fchentrega").innerHTML;
  fchpagoproveedor= (sumaFecha(15,fchentrega)).toString();
  statusdeposito="PENDIENTE";

  fchentrega = fchentrega.split("/");
  fchentrega = fchentrega[2]+"/"+fchentrega[1]+"/"+fchentrega[0];
  fchpagoproveedor = fchpagoproveedor.split("/");
  fchpagoproveedor = fchpagoproveedor[2]+"/"+fchpagoproveedor[1]+"/"+fchpagoproveedor[0];

  //Se verifica que contenga algo status 
  if(status!="null"){boleanStatus=true;}else {boleanStatus=false;}

  //se verifica la descripcion si esta activa 
  if($("#li_descripcionPendiente").is(':visible')){
     descripcionPen = $("#descripcionpendiente").val();
    if(descripcionPen!="" && !(/^\s+$/.test(descripcionPen)) ){
      boleanDescripcioStatus=true; 
    }else {boleanStatus=false;}
  }else{
    boleanDescripcioStatus=true;
    descripcionPen="";
  }
  
  //se verifica si el pop_marcarcomoentregado tiene el formulario de entrega para productos complementarios 
  if($("#entrega_complementariosform").is(':visible')){boleanComplementarios=true; }else{boleanComplementarios=false;}

  if(($("#img1Productv1").val()!="") && ($("#img2Productv1").val()!="")){
  //se valida que tenga datos los campos del formulario productos
    boleanVerificacionProductos = true;
    if(boleanComplementarios){
      numproductoscomplem = document.getElementById("entrega_nocomplempedidos").innerHTML;
      numproductosentregadoscomplem = numproductoscomplem;
      if(($("#img1Complemv1").val()!="") && ($("#img2Complemv1").val()!="")){
       boleanVerificacionComplementarios = true;
     }else 
     boleanVerificacionComplementarios = false;
   }else boleanVerificacionComplementarios = true;
 }else boleanVerificacionProductos = false;


 //si cumple la validacion 
 if(boleanVerificacionComplementarios && boleanVerificacionProductos && boleanStatus && boleanDescripcioStatus){


  srcimg1=$("#img1Productv1").val().replace(/C:\\fakepath\\/i, '');
  srcimg1='Evid1_NumOrden'+idorden+'_'+'p'+idtblproveedor+'_'+srcimg1;
  srcimg2=$("#img2Productv1").val().replace(/C:\\fakepath\\/i, '');
  srcimg2='Evid2_NumOrden'+idorden+'_'+'p'+idtblproveedor+'_'+srcimg2;
  var formData = new FormData($("#formevidenciaProductos")[0]);
  formData.append("version", 'v1');
  formData.append("img1Product", srcimg1);
  formData.append("img2Product", srcimg2);

    if(boleanComplementarios){//datos productos complementarios 

      srcimgComplem1=$("#img1Complemv1").val().replace(/C:\\fakepath\\/i, '');
      srcimgComplem1='Evidimg1Complem1_NumOrden'+idorden+'_'+'p'+idtblproveedor+'_'+srcimgComplem1;

      srcimgComplem2=$("#img2Complemv1").val().replace(/C:\\fakepath\\/i, '');
      srcimgComplem2='Evidimg1Complem2_NumOrden'+idorden+'_'+'p'+idtblproveedor+'_'+srcimgComplem2;

      var formDataC = new FormData($("#formevidenciaComplem")[0]);
      formDataC.append("version", 'v1');
      formDataC.append("img1ProductComple", srcimgComplem1);
      formDataC.append("img2ProductComple", srcimgComplem2); 
      
    }


    $.ajax({ //registrar de tblentregaproduct 
      method: "POST",  
      url: "./../../controllers/setTblentregaproducto.php",  
      data: {solicitadoBy:solicitadoBy,nombreproveedor:nombreproveedor,fchentre:fchentrega,numproductpedidos:numproductos,numproductentregados:numproductosentregados,status:status, descripcion:descripcionPen,statusdeposito:statusdeposito,fchpagoproveedor:fchpagoproveedor,srcimg1:srcimg1,srcimg2:srcimg2,emailcreo:emailproveedor,idtblordencompra:idorden,idtblproveedor:idproveedor}})
      .done(function( datos ){
        console.log(datos);
        console.log(datos.success);
        if(datos.success==1){// si se guarda con exito se guardan las imagenes
            $.ajax({ method: "POST", url: './phps/uploadImgEvidencias.php', data: formData,contentType: false,processData: false,})
            .done(function(datos){//img guardadas con exito
                if(datos=="success"){
                  if(boleanComplementarios){//existen productos complementarios
                     $.ajax({ //actualiza el registro de tblentregaproduct 
                      method: "POST",url: "./../../controllers/setTblentregacomplem.php", data: {solicitadoBy:solicitadoBy,nombreproveedor:nombreproveedor,fchentre:fchentrega,numproductpedidos:numproductoscomplem,numproductentregados:numproductosentregadoscomplem,status:status,fchpagoproveedor:fchpagoproveedor,srcimg1:srcimgComplem1,srcimg2:srcimgComplem2,emailcreo:emailproveedor,idtblordencompra:idorden,idtblproveedor:idproveedor}})
                    .done(function( datos ){
                       if(parseInt(datos.success)==1){
                         //si el registro de complementarios es exitoso entonces guarda las imagenes
                         $.ajax({ method: "POST", url: './phps/uploadImgEvidenciasComplementarios.php', data: formDataC ,contentType: false,processData: false,})
                          .done(function(datos){

                            if(datos=="success"){
                              UIkit.modal("#popup_marcarorden").hide();
                              UIkit.modal("#detalleOrdenPendiente").hide();
                              UIkit.modal.alert('Exitoso, Orden No. '+idorden+' marcada con diferente status');

                              $("#tblordenes_item").empty();
                              $("#tblordenespendiente_item").empty();
                              $("#tblordeneshistorial_item").empty();
                              mostrarListaOrdenes();

                            }else{    

                              //elimina el registro en tblentregaproductcomplem
                              $.ajax({method: "POST", dataType: "json", url: "./../../controllers/setDeleteTblentregacomplem.php",  
                                 data: {solicitadoBy:solicitadoBy,idtblordencompra:idorden,idtblproveedor:idtblproveedor}})
                                .done(function(msg7) {   
                                 }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

                              //elimina el registro en tblentregaproduct
                              $.ajax({method: "POST", dataType: "json", url: "./../../controllers/setDeleteTblentregaproducto.php",  
                                 data: {solicitadoBy:solicitadoBy,idtblordencompra:idorden,idtblproveedor:idtblproveedor}})
                                .done(function(msg7) {   
                                 }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

                                UIkit.modal.alert(datos);

                            }

                          }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");});

                       }else {
                          //si no se guarda correctamente el registro de complementarios elimina el registro de productos
                        $.ajax({method: "POST", dataType: "json", url: "./../../controllers/setDeleteTblentregaproducto.php",  
                         data: {solicitadoBy:solicitadoBy,idtblordencompra:idorden,idtblproveedor:idtblproveedor}})
                        .done(function(msg7) {   
                         }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
                        
                        UIkit.modal.alert('Error, Vuelva Intenarlo.');
                        

                       }

                    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");});

                  }else{//si no hay lanza msj

                    UIkit.modal("#popup_marcarorden").hide();
                    UIkit.modal("#detalleOrdenPendiente").hide();
                    UIkit.modal.alert('Exitoso, Orden No. '+idorden+' marcada con diferente status');

                    $("#tblordenes_item").empty();
                    $("#tblordenespendiente_item").empty();
                    $("#tblordeneshistorial_item").empty();
                    mostrarListaOrdenes();
                    
                  }
                }else{//sin exito el guardar las fotos, elimina el registro de tblentregaproducet
                   $.ajax({method: "POST", dataType: "json", url: "./../../controllers/setDeleteTblentregaproducto.php",  
                     data: {solicitadoBy:solicitadoBy,idtblordencompra:idorden,idtblproveedor:idtblproveedor}})
                    .done(function(msg7) {   
                     }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
                    UIkit.modal.alert(datos);
                }
            }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always"); });
        }else{
         UIkit.modal.alert('Error Vuelva Intentarlo');
        }
        

      }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always"); });

 }else{UIkit.modal.alert('Verifique la Información o Complete los campos requeridos'); }

}

//funcion para modificar el status dela orden (LLENAR POP)
function modificarStatus(idtblordencompra){

  $('#entregamodif_complementariosform').hide();

$.ajax({//se obtiene la fecha 
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getFecha.php",  
    data: {solicitadoBy:solicitadoBy}})
    .done(function( msg9) {
      fch= msg9.datos;
      fch = fch.split("/");
      fchen = fch[2]+"/"+fch[1]+"/"+fch[0];
      $("#entregamodif_fchentrega").text(fchen);
    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always");  });

   $.ajax({
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getTblentregaproducto.php",  
    data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
      .done(function(msg7) {
        console.log(msg7);
      $.each(msg7.datos, function(i,item){
        
          $("#entregamodif_idorden").text(item.tblentregaproducto_idtblordencompra);    
          $("#entregamodif_noproductpedido").text(item.tblentregaproducto_numproductpedidos);
          $("#entregamodif_statusentrega").val(item.tblentregaproducto_status);

      });
         
      }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });


      $.ajax({
        method: "POST",  
        dataType: "json",  
        url: "./../../controllers/getTblentregacomplem.php",  
        data: {solicitadoBy:solicitadoBy,idtblordencompra:idtblordencompra,idtblproveedor:idtblproveedor}})
          .done(function(msg8) {
            console.log(msg8);
            if(msg8.success==1){
              $('#entregamodif_complementariosform').show();
              $.each(msg8.datos, function(i,item){
                $("#entregamodif_nocomplempedidos").text(item.tblentregacomplem_numproductpedidos);
              });

            }             
          }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
}

//funcion para enviar las modificaciones del status de la orden
function marcarordenEntregadaModif(){


  var boleanComplementarios= false; 
  var boleanVerificacionProductos= false;
  var boleanVerificacionComplementarios= false;
  var boleanStatus= false;

  //obtiene los datos que se requieren
  idorden= document.getElementById("entregamodif_idorden").innerHTML;
  idproveedor = idtblproveedor;
  nombreproveedor = tblproveedorNombre;
  numproductos = document.getElementById("entregamodif_noproductpedido").innerHTML;
  numproductosentregados = numproductos; 
  status = $("#entregamodif_statusentrega").val();
  fchentrega = document.getElementById("entregamodif_fchentrega").innerHTML;
  fchpagoproveedor= (sumaFecha(15,fchentrega)).toString();
  statusdeposito ="PENDIENTE";

  fchentrega = fchentrega.split("/");
  fchentrega = fchentrega[2]+"/"+fchentrega[1]+"/"+fchentrega[0];
  fchpagoproveedor = fchpagoproveedor.split("/");
  fchpagoproveedor = fchpagoproveedor[2]+"/"+fchpagoproveedor[1]+"/"+fchpagoproveedor[0];


  //Se verifica que contenga algo status 
  if(status!="null"){boleanStatus=true;}else {boleanStatus=false;}
  
  //se verifica si el pop_marcarcomoentregado tiene el formulario de entrega para productos complementarios 
  if($("#entregamodif_complementariosform").is(':visible')){boleanComplementarios=true; }else{boleanComplementarios=false;}

  if(($("#img1Productv2").val()!="") && ($("#img2Productv2").val()!="")){
  //se valida que tenga datos los campos del formulario productos
    boleanVerificacionProductos = true;
    if(boleanComplementarios){
      numproductoscomplem = document.getElementById("entregamodif_nocomplempedidos").innerHTML;
      numproductosentregadoscomplem = numproductoscomplem;
      if(($("#img1Complemv2").val()!="") && ($("#img2Complemv2").val()!="")){
       boleanVerificacionComplementarios = true;
     }else 
     boleanVerificacionComplementarios = false;
   }else boleanVerificacionComplementarios = true;
 }else boleanVerificacionProductos = false;

 if(boleanVerificacionComplementarios && boleanVerificacionProductos && boleanStatus){

  srcimg1=$("#img1Productv2").val().replace(/C:\\fakepath\\/i, '');
  srcimg1='Evid1_NumOrden'+idorden+'_'+'p'+idtblproveedor+'_'+srcimg1;
  srcimg2=$("#img2Productv2").val().replace(/C:\\fakepath\\/i, '');
  srcimg2='Evid2_NumOrden'+idorden+'_'+'p'+idtblproveedor+'_'+srcimg2;
  var formDataModif = new FormData($("#formevidenciaProductos_modif")[0]);
  formDataModif.append("version", 'v2');
  formDataModif.append("img1Product", srcimg1);
  formDataModif.append("img2Product", srcimg2);

    if(boleanComplementarios){//datos productos complementarios 

      srcimgComplem1=$("#img1Complemv2").val().replace(/C:\\fakepath\\/i, '');
      srcimgComplem1='Evidimg1Complem1_NumOrden'+idorden+'_'+'p'+idtblproveedor+'_'+srcimgComplem1;

      srcimgComplem2=$("#img2Complemv2").val().replace(/C:\\fakepath\\/i, '');
      srcimgComplem2='Evidimg1Complem2_NumOrden'+idorden+'_'+'p'+idtblproveedor+'_'+srcimgComplem2;

      var formDataCModif = new FormData($("#formevidenciaComplem_modif")[0]);
      formDataCModif.append("version", 'v2');
      formDataCModif.append("img1ProductComple", srcimgComplem1);
      formDataCModif.append("img2ProductComple", srcimgComplem2); 
      
    }


    $.ajax({ //registrar de tblentregaproduct 
      method: "POST",  
      url: "./../../controllers/setUpdateTblentregaproducto.php",  
      data: {solicitadoBy:solicitadoBy,nombreproveedor:nombreproveedor,fchentrega:fchentrega,numproductpedidos:numproductos,numproductentregados:numproductosentregados,status:status,statusdeposito:statusdeposito,fchpagoproveedor:fchpagoproveedor,srcimg1:srcimg1,srcimg2:srcimg2,emailmodifico:emailproveedor,idtblordencompra:idorden,idtblproveedor:idproveedor}})
      .done(function(datos){
        if(parseInt(datos.success)==1){
        // si se guarda con exito se guardan las imagenes
            $.ajax({ method: "POST", url: './phps/uploadImgEvidencias.php', data: formDataModif,contentType: false,processData: false,})
            .done(function(datos){//img guardadas con exito
                if(datos=="success"){ 
                  if(boleanComplementarios){//existen productos complementarios
                    $.ajax({ //actualiza el registro de tblentregaproduct 
                      method: "POST",url: "./../../controllers/setUpdateTtblentregacomplem.php", data: {solicitadoBy:solicitadoBy,nombreproveedor:nombreproveedor,fchentrega:fchentrega,numproductpedidos:numproductoscomplem,numproductentregados:numproductosentregadoscomplem,status:status,fchpagoproveedor:fchpagoproveedor,srcimg1:srcimgComplem1,srcimg2:srcimgComplem2,emailmodifico:emailproveedor,idtblordencompra:idorden,idtblproveedor:idproveedor}})
                    .done(function( datos ){
                        if(parseInt(datos.success)==1){ 
                         
                         //si el registro de complementarios es exitoso entonces guarda las imagenes
                         $.ajax({ method: "POST", url: './phps/uploadImgEvidenciasComplementarios.php', data: formDataCModif ,contentType: false,processData: false,})
                          .done(function(datos){
                            if(datos=="success"){
                             UIkit.modal("#popupmodif_marcarorden").hide();
                              UIkit.modal("#detalleOrdenPendiente").hide();
                              UIkit.modal.alert('Exitoso, Orden No. '+idorden+' marcada con diferente status');

                              $("#tblordenes_item").empty();
                              $("#tblordenespendiente_item").empty();
                              $("#tblordeneshistorial_item").empty();
                              mostrarListaOrdenes();

                            }else{    

                              //elimina el registro en tblentregaproductcomplem
                             $.ajax({method: "POST",dataType: "json", 
                          url: "./../../controllers/setUpdateTtblentregacomplem.php",
                          data: {solicitadoBy:solicitadoBy,nombreproveedor:nombreproveedor,fchentrega:fchentrega,numproductpedidos:numproductos,numproductentregados:numproductosentregados,status:'PENDIENTE',fchpagoproveedor:fchpagoproveedor,srcimg1:'NULL',srcimg2:'NULL',emailmodifico:emailproveedor,idtblordencompra:idorden,idtblproveedor:idproveedor}})
                                .done(function(msg7) {   
                                 }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

                              //elimina el registro en tblentregaproduct
                              $.ajax({method: "POST", dataType: "json", 
                          url: "./../../controllers/setUpdateTblentregaproducto.php",
                          data: {solicitadoBy:solicitadoBy,nombreproveedor:nombreproveedor,fchentrega:fchentrega,numproductpedidos:numproductos,numproductentregados:numproductosentregados,status:'PENDIENTE',fchpagoproveedor:fchpagoproveedor,srcimg1:'NULL',srcimg2:'NULL',emailmodifico:emailproveedor,idtblordencompra:idorden,idtblproveedor:idproveedor}})
                          .done(function(msg7) {   
                           }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });

                                UIkit.modal.alert(datos);

                            }

                          }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");});

                       }else {
                          //si no se guarda correctamente el registro de complementarios elimina el registro de productos
                        $.ajax({method: "POST", dataType: "json", 
                          url: "./../../controllers/setUpdateTblentregaproducto.php",
                          data: {solicitadoBy:solicitadoBy,nombreproveedor:nombreproveedor,fchentrega:fchentrega,numproductpedidos:numproductos,numproductentregados:numproductosentregados,status:'PENDIENTE',statusdeposito:statusdeposito,fchpagoproveedor:fchpagoproveedor,srcimg1:'NULL',srcimg2:'NULL',emailmodifico:emailproveedor,idtblordencompra:idorden,idtblproveedor:idproveedor}})
                          .done(function(msg7) {   
                           }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
                              
                        UIkit.modal.alert('Error, Vuelva Intenarlo.');
                        

                       }

                    }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");});

                  }else{//si no hay lanza msj

                    UIkit.modal("#popupmodif_marcarorden").hide();
                    UIkit.modal("#detalleOrdenPendiente").hide();
                    UIkit.modal.alert('Exitoso, Orden No. '+idorden+' marcada con diferente status');

                    $("#tblordenes_item").empty();
                    $("#tblordenespendiente_item").empty();
                    $("#tblordeneshistorial_item").empty();
                    mostrarListaOrdenes();
                    
                  }
                }else{//sin exito el guardar las fotos, elimina el registro de tblentregaproducet
                   $.ajax({method: "POST", dataType: "json", 
                    url: "./../../controllers/setUpdateTblentregaproducto.php",
                    data: {solicitadoBy:solicitadoBy,nombreproveedor:nombreproveedor,fchentrega:fchentrega,numproductpedidos:numproductos,numproductentregados:numproductosentregados,status:'PENDIENTE',statusdeposito:statusdeposito,fchpagoproveedor:fchpagoproveedor,srcimg1:'NULL',srcimg2:'NULL',emailmodifico:emailproveedor,idtblordencompra:idorden,idtblproveedor:idproveedor}})
                    .done(function(msg7) {   
                     }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);}).always(function(){  console.log("always");  });
                    UIkit.modal.alert(datos);
                }
            }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always"); });
        }else{
         UIkit.modal.alert('Error Vuelva Intentarlo');
        }
        

      }).fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  }).always(function(){  console.log("always"); });

 }else UIkit.modal.alert('Verifique la Información o Complete los campos requeridos'); 

}


function pendienteDesc(){

  status = "PENDIENTE";

  statuspendiente = $("#entrega_statusentrega").val();

  if(statuspendiente == status){
    $("#li_descripcionPendiente").show();
  }else {$("#li_descripcionPendiente").hide();}


}

//funcion para visualizar el mapa 
function mapaGeo(x,id){
 var geocoder = new google.maps.Geocoder();
 var direccionCompleta; 
 if(id==1){
  direccionCompleta = document.getElementById("dirCompletaOrden").innerHTML;
 }else if (id==2){
  direccionCompleta = document.getElementById("dirCompletaCotizacion"+x).innerHTML;
}else {direccionCompleta = document.getElementById("dirCompletaCotizacionNueva"+x).innerHTML;}
 
 $("#direccionMapa").empty();
 $("#direccionMapa").append('<span>'+direccionCompleta+'</span>');                    
 geocoder.geocode({ 'address': direccionCompleta}, geocodeResult);

}

//funcion necesaria para procesar el resultado del mapa 
function geocodeResult(results, status) {
    // Verificamos el estatus
    if (status == 'OK') {
        // Si hay resultados encontrados, centramos y repintamos el mapa
        // esto para eliminar cualquier pin antes puesto
        var mapOptions = {
          center: results[0].geometry.location,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map($("#gmap").get(0), mapOptions);
        // fitBounds acercar?el mapa con el zoom adecuado de acuerdo a lo buscado
        map.fitBounds(results[0].geometry.viewport);
        // Dibujamos un marcador con la ubicaci? del primer resultado obtenido
        var markerOptions = { position: results[0].geometry.location }
        var marker = new google.maps.Marker(markerOptions);
        marker.setMap(map);
      } else {
        // En caso de no haber resultados o que haya ocurrido un error
        // lanzamos un mensaje con el error
        UIkit.modal.alert('Busqueda Fallida'); 
      }
    }

//funcion para llenar la tabla de cotizaciones de productos y los pops de cada orden 
function mostrarCotizaciones(){
  $.ajax({
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getAllTblordenescotizadorByTblcarritocotizadorByTblproveedor.php",  
    data: {solicitadoBy:solicitadoBy, idtblproveedor:idtblproveedor}})
  .done(function( msg)
  { 
    $.each(msg.datos, function(i,item)
    {
      //cambio de formato de fecha 
      fchentrega= msg.datos[i].tblcarritoproductcotizador_fchentrega;
      fchentrega = fchentrega.split("-");
      fchentrega = fchentrega[2]+"/"+fchentrega[1]+"/"+fchentrega[0];

      idpopup_detalleordencotizador = "'#popup_ordencotizador"+i+"'";
      popup_ordencotizador= '<div class="uk-modal" id="popup_ordencotizador'+i+'"><div class="uk-modal-dialog uk-modal-dialog-large"><button type="button" class="uk-modal-close uk-close"></button><div class="uk-modal-header"><h3 class="uk-modal-title"><i class="material-icons">&#xE878;</i>Detalle de Cotizaci? </h3></div><div class="uk-grid" ><div class="uk-width-large-1-2"></div><div  class="uk-width-large-1-2" id="cotizacion_botondeubicacion'+i+'"></div></div><form action="" class="uk-form-stacked" id="product_edit_form"><div class="uk-grid uk-grid-medium" data-uk-grid-margin><div class="uk-width-1-1"><div class="md-card"><div class="md-card-toolbar"><h3 class="md-card-toolbar-heading-text" id="detallecotizador_idordencotizador'+i+'"></h3></div><div class="md-card-content large-padding"><div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin><div class="uk-width-large-1-2"><h4 class="heading_c uk-margin-small-bottom">Datos de Evento </h4><ul class="md-list md-list-addon"><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE8B1;</i></div><div class="md-list-content" id="detallecotizador_tipoevento'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE916;</i></div><div class="md-list-content" id="detallecotizador_fchevento'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE7FB;</i></div><div class="md-list-content" id="detallecotizador_numinvitados'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE7E9;</i></div><div class="md-list-content" id="detallecotizador_nomproducto'+i+'"></div></li></ul><ul class="uk-grid uk-grid-width-1-2 uk-text-center" data-uk-grid-margin id="imgOrdenCotizador'+i+'"></ul></div><div class="uk-width-large-1-2"><h4 class="heading_c uk-margin-small-bottom">Informaci? de Cliente </h4><div class="uk-form-row"><ul class="md-list md-list-addon" id="detallecotizador_costos'+i+'"><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE7FD;</i></div><div class="md-list-content" id="detallecotizador_nombrecliente'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE158;</i></div><div class="md-list-content" id="detallecotizador_email'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE0CD;</i></div><div class="md-list-content" id="detallecotizador_telef'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon  material-icons">&#xE55F;</i></div><div class="md-list-content" id="detallecotizador_direccion'+i+'"></div></li><br/></ul></div></div></div></div></div></div></div><div class="uk-modal-footer uk-text-right" id="detallecotizador_enviar'+i+'"></div></form></div></div>'; 

      $("#ordenesdecotizacionesproductos").append(popup_ordencotizador);
      if(msg.datos[i].tblcarritoproductcotizador_costotienda==null){costotienda='<span class="uk-badge uk-badge-warning">---</span>';}
      else{costotienda='<span class="uk-badge uk-badge-success">'+(msg.datos[i].tblcarritoproductcotizador_costotienda).toString()+'</span>';}
      if(msg.datos[i].tblcarritoproductcotizador_costodomicilio==null){costodomicilio='<span class="uk-badge uk-badge-warning">---</span>';}
      else{costodomicilio='<span class="uk-badge uk-badge-success">'+(msg.datos[i].tblcarritoproductcotizador_costodomicilio).toString()+'</span>';}  

      $("#tblcotizacionesproductos").append(
        '<tr data-uk-modal="{target:'+idpopup_detalleordencotizador+' ,bgclose:false}" ><td class="uk-text-center">'+msg.datos[i].idtblordencotizador+
        '</td><td class="uk-text-center">'+msg.datos[i].tblproductcotizador_nombre+
        '</td><td class="uk-text-center">'+fchentrega+
        '</td><td class="uk-text-center">'+msg.datos[i].tblevento_nombre+
        '</td><td class="uk-text-center">'+costotienda+
        '</td><td class="uk-text-center">'+costodomicilio+'</td></tr>');
        
        detalleOrdenCotizador(msg.datos[i].idtblcarritoproductcotizador,i);

    }); 

})
.fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
.always(function(){  console.log("always");  });

}
//funcion para llenar el popup de la orden de prouctos 
function detalleOrdenCotizador(idcarritocotizador,x){

  $.ajax({
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getAllTblordenescotizadorByTblcarritocotizadorByTblproveedor.php",  
    data: {solicitadoBy:solicitadoBy, idtblproveedor:idtblproveedor}})
  .done(function( msg)
  {
    $.each(msg.datos, function(i,item)
    { 
      fchentrega= msg.datos[i].tblcarritoproductcotizador_fchentrega;
      fchentrega = fchentrega.split("-");
      fchentrega = fchentrega[2]+"/"+fchentrega[1]+"/"+fchentrega[0];

      if(parseInt(msg.datos[i].idtblcarritoproductcotizador) == parseInt(idcarritocotizador))
      {
       $("#detallecotizador_idordencotizador"+x).append('#'+msg.datos[i].idtblordencotizador+' Cotizaci?<span style="display:none" id="cotizacion_idtblordencotizacion'+i+x+'">'+msg.datos[i].idtblordencotizador+'</span>');
       $("#detallecotizador_tipoevento"+x).append('<span class="md-list-heading">'+msg.datos[i].tblevento_nombre+'</span><span class="uk-text-small uk-text-muted">Tipo de Evento</span>');
       $("#detallecotizador_fchevento"+x).append('<span class="md-list-heading" id="cotizacion_fchevento'+i+x+'">'+fchentrega+'</span><span class="uk-text-small uk-text-muted">Fecha de Evento</span>');
       $("#detallecotizador_numinvitados"+x).append('<span class="md-list-heading" id="cotizacion_numpersonas'+i+x+'">'+msg.datos[i].tblcarritoproductcotizador_numpersonas+'</span><span class="uk-text-small uk-text-muted"># N?mero de Invitados</span>');
       $("#detallecotizador_nomproducto"+x).append('<span class="md-list-heading">'+msg.datos[i].tblproductcotizador_nombre+'</span><span class="uk-text-small uk-text-muted">Nombre Producto</span><span style="display:none" id="cotizacion_idproductcotizador'+i+x+'">'+msg.datos[i].tblproductcotizador_idtblproductcotizador+'</span>');
       $("#detallecotizador_nombrecliente"+x).append('<span class="md-list-heading">'+msg.datos[i].tblordencotizador_nombre+'</span><span class="uk-text-small uk-text-muted">Nombre Completo</span>');
       $("#detallecotizador_email"+x).append('<span class="md-list-heading">'+ msg.datos[i].tblordencotizador_email+'</span><span class="uk-text-small uk-text-muted">Email</span>');
       $("#detallecotizador_telef"+x).append('<span class="md-list-heading">'+msg.datos[i].tblordencotizador_telefono+'</span><span class="uk-text-small uk-text-muted">Telef?o</span>');
       $("#imgOrdenCotizador"+x).append('<li><img src="assets/img/ecommerce/prt2.png" alt="" /></li><li><img src="assets/img/imgcotizador/'+msg.datos[i].tblcarritoproductcotizador_srcimg+'" alt="" /></li><span style="display:none" id="cotizacion_srimg'+i+x+'">'+msg.datos[i].tblcarritoproductcotizador_srcimg+'</span>');
       $("#detallecotizador_direccion"+x).append('<span class="md-list-heading" id="dirCompletaCotizacion'+x+'">'+msg.datos[i].tblordencotizador_pais+", "+msg.datos[i].tblordencotizador_ciudad+", "+msg.datos[i].tblordencotizador_direccion+'</span><span class="uk-text-small uk-text-muted">Direcci? de Evento</span>');
       $("#cotizacion_botondeubicacion"+x).append('<button class="md-btn md-btn-primary md-btn-block md-btn-wave-light" type="button" onclick="mapaGeo('+x+','+idmapaCotizaciones+')" data-uk-modal="{target:'+"'#mapa'"+',modal: false,bgclose:false}"> Ubicacion de Entrega en Mapa</button>');

      if(msg.datos[i].tblcarritoproductcotizador_costotienda==null && msg.datos[i].tblcarritoproductcotizador_costodomicilio==null){
        $("#detallecotizador_costos"+x).append('<li><div class="md-list-addon-element" ><i class="md-list-addon-icon material-icons">&#xE263;</i></div><div class="md-list-content"><input type="number" step="any" class="md-input uk-text-center" placeholder="Precio de Cotizaci? con Entrega en Tienda" id="cotizacion_costotienda'+i+x+'" min="1"/></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE263;</i></div><div class="md-list-content"><input type="number" class="md-input uk-text-center" placeholder="Precio de Cotizaci? con Servicio a Domicilio" id="cotizacion_costodomicilio'+i+x+'" min="1" /></div>');
        $("#detallecotizador_enviar"+x).append('<button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="enviarCotizacion('+msg.datos[i].idtblcarritoproductcotizador+','+i+','+x+')" >Enviar Cotizaci? </button>');
      }else{
        $("#detallecotizador_costos"+x).append('<li><div class="md-list-addon-element" ><i class="md-list-addon-icon material-icons">&#xE263;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg.datos[i].tblcarritoproductcotizador_costotienda+'</span><span class="uk-text-small uk-text-muted">Costo con Servicio en Tienda</span></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE263;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg.datos[i].tblcarritoproductcotizador_costodomicilio+'</span><span class="uk-text-small uk-text-muted">Costo con Servicio a Domicilio</span></div></li>');}
      }      
    });

})
.fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
.always(function(){  console.log("always");  });
}

//funcion para mandar el costo de cada cotizacion de productos 
function enviarCotizacion(idtblcarritoproductcotizador,i,x){

  idtblcarritoproductcotizador = idtblcarritoproductcotizador;
  numpersonas = document.getElementById("cotizacion_numpersonas"+i+x).innerHTML;
  fchaevento = document.getElementById("cotizacion_fchevento"+i+x).innerHTML;
  fchaevento = fchaevento.split("/");
  fchaevento = fchaevento[2]+"-"+fchaevento[1]+"-"+fchaevento[0];
  srcimg = document.getElementById("cotizacion_srimg"+i+x).innerHTML;
  idordencotizador= document.getElementById("cotizacion_idtblordencotizacion"+i+x).innerHTML;
  idproductcotizador= document.getElementById("cotizacion_idproductcotizador"+i+x).innerHTML;
  costotienda = $("#cotizacion_costotienda"+i+x).val().toString();
  costodomicilio = $("#cotizacion_costodomicilio"+i+x).val().toString();
  emailmodif= emailproveedor;

 if((costotienda!="") && (costodomicilio!="")){

UIkit.modal.confirm("* Precio con Servicio en Tienda: $"+costotienda+"<br/>* Precio con Servicio a Domicilio: $"+costodomicilio+"<br/><br/> Si los precios de la cotizacion son correctos presione Ok", function(){
    
    $.ajax({ //actualiza ek registro con los costos de la cotizacion 
      method: "POST",dataType: "json",url: "./../../controllers/setUpdateTblcarritoproductcotizador.php", data: {solicitadoBy:solicitadoBy, idtblcarritoproductcotizador:idtblcarritoproductcotizador, numpersonas:numpersonas,fchentrega:fchaevento, srcimgproducto:srcimg, idtblordencotizador:idordencotizador, idtblproductcotizador:idproductcotizador, costotienda:costotienda, costodomicilio:costodomicilio, emailmodifico:emailmodif}})
        .done(function(datos){
           if(parseInt(datos.success)==1){
           UIkit.modal.alert('Exitoso, Cotizacion Enviada');
           $("#ordenesdecotizacionesproductos").empty();
           $("#tblcotizacionesproductos").empty();
           $("#tblcotizacionesproductosnuevos").empty();
           mostrarCotizacionesProductosNuevos();
           mostrarCotizaciones();
        }else {
            UIkit.modal.alert('Error Vuelva Intenetarlo mas Tarde');         
        }
      })
      .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);})
      .always(function(){  console.log("always");});
});

 }else UIkit.modal.alert('Ingrese el Precio de la Cotizaci?');
}

//funcion para llenar la tabla de cotizaciones de productos nuevos y los pops de cada orden 
function mostrarCotizacionesProductosNuevos(){
  $.ajax({
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getAllTblcarritoproductnuevocotizador2.php",  
    data: {solicitadoBy:solicitadoBy, idtblproveedor:idtblproveedor}})
  .done(function( msg)
  { 
    $.each(msg.datos, function(i,item)
    { 

      idtblcarritoproductnuevocotizador=msg.datos[i].idtblcarritoproductnuevocotizador

      fchentrega= msg.datos[i].tblcarritoproductnuevocotizador_fchentrega ;
      fchentrega = fchentrega.split("-");
      fchentrega = fchentrega[2]+"/"+fchentrega[1]+"/"+fchentrega[0];

      idpopup_detalleordencotizadorproductnuevo = "'#popup_ordencotizadorproductNuevo"+i+"'";
      popup_ordencotizadorproductnuevo = '<div class="uk-modal" id="popup_ordencotizadorproductNuevo'+i+'"><div class="uk-modal-dialog uk-modal-dialog-large"><button type="button" class="uk-modal-close uk-close"></button><div class="uk-modal-header"><h3 class="uk-modal-title"><i class="material-icons">&#xE878;</i>Detalle de Cotizaci? </h3></div><div class="uk-grid" ><div class="uk-width-large-1-2"></div><div  class="uk-width-large-1-2" id="cotizacionnueva_botondeubicacion'+i+'"></div></div><form action="" class="uk-form-stacked" id="product_edit_form"><div class="uk-grid uk-grid-medium" data-uk-grid-margin><div class="uk-width-1-1"><div class="md-card"><div class="md-card-toolbar"><h3 class="md-card-toolbar-heading-text" id="detallecotizadorproductnuevo_idordencotizador'+i+'"></h3></div><div class="md-card-content large-padding"><div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin><div class="uk-width-large-1-2"><h4 class="heading_c uk-margin-small-bottom">Datos de Evento </h4><ul class="md-list md-list-addon"><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE8B1;</i></div><div class="md-list-content" id="detallecotizadorproductnuevo_tipoevento'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE916;</i></div><div class="md-list-content" id="detallecotizadorproductnuevo_fchevento'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE7FB;</i></div><div class="md-list-content" id="detallecotizadorproductnuevo_numinvitados'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE7E9;</i></div><div class="md-list-content" id="detallecotizadorproductnuevo_nomproducto'+i+'"></div></li></ul><ul class="uk-grid uk-grid-width-1-2 uk-text-center" data-uk-grid-margin id="imgOrdenCotizadorproductnuevo'+i+'"></ul></div><div class="uk-width-large-1-2"><h4 class="heading_c uk-margin-small-bottom">Informaci? de Cliente </h4><div class="uk-form-row"><ul class="md-list md-list-addon" id="detallecotizadorproductnuevo_costos'+i+'"><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE7FD;</i></div><div class="md-list-content" id="detallecotizadorproductnuevo_nombrecliente'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE158;</i></div><div class="md-list-content" id="detallecotizadorproductnuevo_email'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE0CD;</i></div><div class="md-list-content" id="detallecotizadorproductnuevo_telef'+i+'"></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon  material-icons">&#xE55F;</i></div><div class="md-list-content" id="detallecotizadorproductnuevo_direccion'+i+'"></div></li><br/></ul></div></div></div></div></div></div></div><div class="uk-modal-footer uk-text-right" id="detallecotizadorproductnuevo_enviar'+i+'"></div></form></div></div>'; 

      $("#ordenesdecotizacionesproductos").append(popup_ordencotizadorproductnuevo);

      $("#tblcotizacionesproductosnuevos").append(
        '<tr data-uk-modal="{target:'+idpopup_detalleordencotizadorproductnuevo+' ,bgclose:false}" ><td class="uk-text-center">'+msg.datos[i].tblordencotizador_idtblordencotizador+
        '</td><td class="uk-text-center">'+fchentrega+
        '</td><td class="uk-text-center">'+msg.datos[i].tblcarritoproductnuevocotizador_tipodeevento+
        '</td><td class="uk-text-center" id="cotizadorproductnuevo_costotienda'+i+'"></td><td class="uk-text-center" id="cotizadorproductnuevo_costodomicilio'+i+'"></td></tr>');
      $.ajax({
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getTblcostocotizacionproductnuevo.php",  
    data: {solicitadoBy:solicitadoBy,idtblcarritoproductnuevocotizador:idtblcarritoproductnuevocotizador,idtblproveedor:idtblproveedor}})
  .done(function( msg2)
  {
    if(msg2.success!=0){
      $("#cotizadorproductnuevo_costotienda"+i).append('<span class="uk-badge uk-badge-success">'+msg2.datos[i].tblcostocotizacionproductnuevo_costotienda+'</span>');
      $("#cotizadorproductnuevo_costodomicilio"+i).append('<span class="uk-badge uk-badge-success">'+msg2.datos[i].tblcostocotizacionproductnuevo_costodomicilio+'</span>');
    }else {
      $("#cotizadorproductnuevo_costotienda"+i).append('<span class="uk-badge uk-badge-warning">---</span>');
      $("#cotizadorproductnuevo_costodomicilio"+i).append('<span class="uk-badge uk-badge-warning">---</span>');
    }
  })
  .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
  .always(function(){  console.log("always");  });
        
       detalleOrdenCotizadorProductNuevo(idtblcarritoproductnuevocotizador,i);

    }); 

})
.fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
.always(function(){  console.log("always");  });

}

//funcion para llenar los pops de las cotizaciones de nuevo productos
function detalleOrdenCotizadorProductNuevo(idtblcarritoproductnuevocotizador,x){

  $.ajax({
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getTblcarritoproductnuevocotizador.php",  
    data: {solicitadoBy:solicitadoBy, idtblcarritoproductnuevocotizador:idtblcarritoproductnuevocotizador}})
  .done(function( msg)
  { 

    $.each(msg.datos, function(i,item)
    { 
      fchentrega=  msg.datos[i].tblcarritoproductnuevocotizador_fchentrega;
      fchentrega = fchentrega.split("-");
      fchentrega = fchentrega[2]+"/"+fchentrega[1]+"/"+fchentrega[0];

      $("#detallecotizadorproductnuevo_idordencotizador"+x).append('#'+msg.datos[i].tblordencotizador_idtblordencotizador+' Cotizaci?');
      $("#detallecotizadorproductnuevo_fchevento"+x).append('<span class="md-list-heading">'+fchentrega+'</span><span class="uk-text-small uk-text-muted">Fecha de Evento</span>');
      $("#detallecotizadorproductnuevo_tipoevento"+x).append('<span class="md-list-heading">'+msg.datos[i].tblcarritoproductnuevocotizador_tipodeevento+'</span><span class="uk-text-small uk-text-muted">Tipo de Evento</span>');
      $("#detallecotizadorproductnuevo_numinvitados"+x).append('<span class="md-list-heading">'+msg.datos[i].tblcarritoproductnuevocotizador_numpersonas+'</span><span class="uk-text-small uk-text-muted"># N?mero de Invitados</span>');
      $("#detallecotizadorproductnuevo_nomproducto"+x).append('<span class="md-list-heading">'+msg.datos[i].tblcarritoproductnuevocotizador_sabores+'</span><span class="uk-text-small uk-text-muted">Sabores</span><span class="md-list-heading">'+msg.datos[i].tblcarritoproductnuevocotizador_comentarios  +'</span><span class="uk-text-small uk-text-muted">Comentarios</span>');
      $("#imgOrdenCotizadorproductnuevo"+x).append('<div><img src="assets/img/imgcotizador/'+msg.datos[i].tblcarritoproductnuevocotizador_srcimg +'" alt="" /></div>');

      idordencotizadorproductnuevo= msg.datos[i].tblordencotizador_idtblordencotizador;
       //datos del cliente
      $.ajax({
        method: "POST",  
        dataType: "json",  
        url: "./../../controllers/getTblordencotizador.php",  
        data: {solicitadoBy:solicitadoBy,idtblordencotizador:idordencotizadorproductnuevo}})
      .done(function( msg2)
      {
        $.each(msg2.datos, function(i,item){
          $("#detallecotizadorproductnuevo_nombrecliente"+x).append('<span class="md-list-heading">'+msg2.datos[i].tblordencotizador_nombre+'</span><span class="uk-text-small uk-text-muted">Nombre Completo</span>');
          $("#detallecotizadorproductnuevo_email"+x).append('<span class="md-list-heading">'+ msg2.datos[i].tblordencotizador_email+'</span><span class="uk-text-small uk-text-muted">Email</span>');
          $("#detallecotizadorproductnuevo_telef"+x).append('<span class="md-list-heading">'+msg2.datos[i].tblordencotizador_telefono+'</span><span class="uk-text-small uk-text-muted">Telef?o</span>');
          $("#detallecotizadorproductnuevo_direccion"+x).append('<span class="md-list-heading" id="dirCompletaCotizacionNueva'+x+'">'+msg2.datos[i].tblordencotizador_pais+", "+msg2.datos[i].tblordencotizador_ciudad+", "+msg2.datos[i].tblordencotizador_direccion+'</span><span class="uk-text-small uk-text-muted">Direcci? de Evento</span>');
          $("#cotizacionnueva_botondeubicacion"+x).append('<button class="md-btn md-btn-primary md-btn-block md-btn-wave-light" type="button" onclick="mapaGeo('+x+','+idmapaCotizacionesNuevas+')" data-uk-modal="{target:'+"'#mapa'"+',modal: false,bgclose:false}"> Ubicacion de Entrega en Mapa</button>');

        });
      })
      .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
      .always(function(){  console.log("always");  });

      $.ajax({
    method: "POST",  
    dataType: "json",  
    url: "./../../controllers/getTblcostocotizacionproductnuevo.php",  
    data: {solicitadoBy:solicitadoBy,idtblcarritoproductnuevocotizador:idtblcarritoproductnuevocotizador,idtblproveedor:idtblproveedor}})
  .done(function( msg3)
  {
    if(msg3.success!=1){
        $("#detallecotizadorproductnuevo_costos"+x).append('<li><div class="md-list-addon-element" ><i class="md-list-addon-icon material-icons">&#xE263;</i></div><div class="md-list-content"><input type="number" step="any" class="md-input uk-text-center" placeholder="Precio de Cotizaci? con Entrega en Tienda" id="cotizacionnuevo_costotienda'+i+x+'" min="1"/></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE263;</i></div><div class="md-list-content"><input type="number" class="md-input uk-text-center" placeholder="Precio de Cotizaci? con Servicio a Domicilio" id="cotizacionnuevo_costodomicilio'+i+x+'" min="1" /></div>');
        $("#detallecotizadorproductnuevo_enviar"+x).append('<button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="enviarCotizacionProductNuevo('+idtblcarritoproductnuevocotizador+','+i+','+x+')">Enviar Cotizaci? </button>');// 
    }else {
      $("#detallecotizadorproductnuevo_costos"+x).append('<li><div class="md-list-addon-element" ><i class="md-list-addon-icon material-icons">&#xE263;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg3.datos[i].tblcostocotizacionproductnuevo_costotienda+'</span><span class="uk-text-small uk-text-muted">Costo con Servicio en Tienda</span></div></li><li><div class="md-list-addon-element"><i class="md-list-addon-icon material-icons">&#xE263;</i></div><div class="md-list-content"><span class="md-list-heading">'+msg3.datos[i].tblcostocotizacionproductnuevo_costodomicilio+'</span><span class="uk-text-small uk-text-muted">Costo con Servicio a Domicilio</span></div></li>');
    }
  })
  .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
  .always(function(){  console.log("always");  });
    });

 })
 .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);  })
 .always(function(){  console.log("always");  });
}

function enviarCotizacionProductNuevo(idtblcarritoproductnuevocotizador,i,x){
 
  idtblcarritoproductnuevocotizador = idtblcarritoproductnuevocotizador;
  costotienda = $("#cotizacionnuevo_costotienda"+i+x).val().toString();
  costodomicilio = $("#cotizacionnuevo_costodomicilio"+i+x).val().toString();
  idproveedor=idtblproveedor;
  emailcreo= emailproveedor;

 if((costotienda!="") && (costodomicilio!="")){

UIkit.modal.confirm("* Precio con Servicio en Tienda: $"+costotienda+"<br/>* Precio con Servicio a Domicilio: $"+costodomicilio+"<br/><br/> Si los precios de la cotizacion son correctos presione Ok", function(){
   
    $.ajax({ //ingresa el registro con los costos de la cotizacion 
      method: "POST",dataType: "json",url: "./../../controllers/setTblcostocotizacionproductnuevo.php", data: {solicitadoBy:solicitadoBy,costotienda:costotienda,costodomicilio:costodomicilio,idtblcarritoproductnuevocotizador:idtblcarritoproductnuevocotizador,idtblproveedor:idproveedor,emailcreo:emailcreo}})
        .done(function(datos){
           if(parseInt(datos.success)==1){
           UIkit.modal.alert('Exitoso, Cotizacion Enviada');
           $("#ordenesdecotizacionesproductos").empty();
           $("#tblcotizacionesproductos").empty();
           $("#tblcotizacionesproductosnuevos").empty();
           mostrarCotizacionesProductosNuevos();
           mostrarCotizaciones();
        }else {
            UIkit.modal.alert('Error Vuelva Intenetarlo mas Tarde');         
        }
      })
      .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);})
      .always(function(){  console.log("always");});
});

 }else UIkit.modal.alert('Ingrese el Precio de la Cotizaci?');
}

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('gmap'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 15
      });
}

function sumaFecha(d, fecha){
  var Fecha = new Date();
  var sFecha = fecha || (Fecha.getDate() + "/" + (Fecha.getMonth() +1) + "/" + Fecha.getFullYear());
  var sep = sFecha.indexOf('/') != -1 ? '/' : '-'; 
  var aFecha = sFecha.split(sep);
  var fecha = aFecha[2]+'/'+aFecha[1]+'/'+aFecha[0];
  fecha= new Date(fecha);
  fecha.setDate(fecha.getDate()+parseInt(d));
  var anno=fecha.getFullYear();
  var mes= fecha.getMonth()+1;
  var dia= fecha.getDate();
  mes = (mes < 10) ? ("0" + mes) : mes;
  dia = (dia < 10) ? ("0" + dia) : dia;
  var fechaFinal = dia+sep+mes+sep+anno;
  return (fechaFinal);
}

//NOTIFICACIONES
function mostrarNotificaciones(){
 var clase;
  $.ajax({ 
      method: "POST",dataType: "json",url: "./../../controllers/getAllTblnotificacionbyTblnotificacionvista.php", data: {solicitadoBy:solicitadoBy,idproveedor:idtblproveedor}})
        .done(function(notif){
            $.each(notif.datos, function(i,item){
              if(parseInt(notif.datos[i].tblnotificacionvista_status)!=1){
                clase= "uk-text-bold ";
              }else{clase= "uk-text-muted";}


               $("#tblnotificacion").append(//
            '<tr class="'+clase+'" onclick="notifi('+notif.datos[i].tblnotificacionredireccion_idtblnotificacionredireccion+','+notif.datos[i].idtblnotificacionvista+')"><td><a>'+notif.datos[i].tblnotificacion_asunto+'</a></td><td>'+notif.datos[i].tblnotificacion_mensaje+
            '</td><td>'+notif.datos[i].tblnotificacion_fchcreacion+
            '</td><td>'+notif.datos[i].tblnotificacion_emisor+'</td></tr>');
          });
        })
      .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);})
      .always(function(){  console.log("always");});
}
function notifi(idredireccion, idtblnotificacionvista){
  switch(idredireccion){
    case 1: 
            notificacionVista(idtblnotificacionvista);
            $("#tblnotificacion").empty();
            setTimeout(mostrarNotificaciones, 1000);
            UIkit.switcher('#tabs_1').show(4);//General queda en Notificaciones
    break;
    case 2: notificacionVista(idtblnotificacionvista);
            $("#tblnotificacion").empty();
            setTimeout(mostrarNotificaciones, 1000);
            UIkit.switcher('#tabs_1').show(0);
    break;
    case 3: notificacionVista(idtblnotificacionvista);
            $("#tblnotificacion").empty();
            setTimeout(mostrarNotificaciones, 1000);
            UIkit.switcher('#tabs_1').show(1);
    break;
    case 4: notificacionVista(idtblnotificacionvista);
            $("#tblnotificacion").empty();
            setTimeout(mostrarNotificaciones, 1000);
            UIkit.switcher('#tabs_1').show(2);
    break;
    case 5: notificacionVista(idtblnotificacionvista);
            $("#tblnotificacion").empty();
            setTimeout(mostrarNotificaciones, 1000);
            UIkit.switcher('#tabs_1').show(3);
    break;
    case 6: notificacionVista(idtblnotificacionvista);
            $("#tblnotificacion").empty();
            setTimeout(mostrarNotificaciones, 1000);
            UIkit.switcher('#tabs_1').show(4);
    break;
    case 7: notificacionVista(idtblnotificacionvista);
            $("#tblnotificacion").empty();
            setTimeout(mostrarNotificaciones, 1000);
            UIkit.switcher('#tabs_1').show(5);
    break;
    case 8: 
            notificacionVista(idtblnotificacionvista);
            window.location="perfilTienda.php";
    break;
    case 9: notificacionVista(idtblnotificacionvista);
            window.location="perfilTienda.php";
    break;
    case 10: notificacionVista(idtblnotificacionvista);
             window.location="perfilTienda.php";
    break;
    case 11: notificacionVista(idtblnotificacionvista);
             window.location="fotografos.php";
    break;
    case 12: notificacionVista(idtblnotificacionvista);
             window.location="usuarios.php";
    break;
    case 13: notificacionVista(idtblnotificacionvista);
             window.location="./informacionGeneral.php";
    break;
    default: UIkit.switcher('#tabs_1').show(4);//General queda en Notificaciones
  }
  
}
function notificacionVista(idtblnotificacionvista){
$.ajax({ 
      method: "POST",dataType: "json",url: "./../../controllers/setUpdateTblnotificacionvista.php", data: {solicitadoBy:solicitadoBy,idtblnotificacionvista:idtblnotificacionvista,emailproveedor:emailproveedor}})
        .done(function(notif){})
      .fail(function( jqXHR, textStatus ) {  console.log("fail jqXHR::"+jqXHR+" textStatus::"+textStatus);})
      .always(function(){  console.log("always");});
}



 </script>

 <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjeDznrCqVmUmnPkqY34STkSMsV2RvFok&callback=initMap" ></script>
 
 <!--FIN DE CODIGO Misael Bravo -->
 <!-- page specific plugins -->
 <!-- fullcalendar -->
 <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
 <script src='bower_components/fullcalendar/dist/lang/es.js'></script>
<!-- tablesorter -->
    <script src="bower_components/tablesorter/dist/js/jquery.tablesorter.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/widgets/widget-columnSelector.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/widgets/widget-print.min.js"></script>
    <script src="bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js"></script>

 <!--  calendar functions 
 <script src="./assets/js/pages/plugins_fullcalendar.js"></script>-->
 <!-- d3 -->
 <script src="bower_components/d3/d3.min.js"></script>
 <!-- metrics graphics (charts) -->
 <script src="bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>
 <!-- chartist (charts) 
 <script src="bower_components/chartist/dist/chartist.min.js"></script>-->
<!-- maplace (google maps) 
  <script src="http://maps.google.com/maps/api/js"></script>-->
  <script src="bower_components/maplace-js/dist/maplace.min.js"></script>
  <!-- peity (small charts) -->
  <script src="bower_components/peity/jquery.peity.min.js"></script>
  <!-- easy-pie-chart (circular statistics) -->
  <script src="bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
  <!-- countUp -->
  <script src="bower_components/countUp.js/dist/countUp.min.js"></script>
  <!-- handlebars.js -->
  <script src="bower_components/handlebars/handlebars.min.js"></script>
  <script src="assets/js/custom/handlebars_helpers.min.js"></script>
  <!-- CLNDR -->
  <script src="bower_components/clndr/clndr.min.js"></script>
  <!-- fitvids -->
  <script src="bower_components/fitvids/jquery.fitvids.js"></script>

  <!--  dashbord functions 
  <script src="assets/js/pages/dashboard.min.js"></script>-->
  <script src="assets/js/custom/dropify/dist/js/dropify.min.js"></script>
  <!--  form file input functions -->
  <script src="assets/js/pages/forms_file_input.min.js"></script>
  <!--  product edit functions -->
  <script src="assets/js/pages/ecommerce_product_edit.min.js"></script>
  <!-- page specific plugins -->
  <!-- parsley (validation) -->
  <script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
    // load extra validators
    altair_forms.parsley_extra_validators();
  </script>
  <script src="bower_components/parsleyjs/dist/parsley.min.js"></script>
  <!-- jquery steps -->
  <script src="assets/js/custom/wizard_steps.min.js"></script>

  <!--  forms wizard functions -->
  <script src="assets/js/pages/forms_wizard.min.js"></script>
  <!-- maplace (google maps) 
  <script src="http://maps.google.com/maps/api/js"></script>-->
  <script src="bower_components/maplace-js/dist/maplace.min.js"></script>

  <!--  google maps functions
  <script src="assets/js/pages/plugins_google_maps.min.js"></script> -->

  <!-- MIGUEL -->
  <!-- kendo UI -->
  <script src="assets/js/kendoui_custom.min.js"></script>
  <!--  kendoui functions -->
  <script src="assets/js/pages/kendoui.min.js"></script>
  <!--page_contact_list-->
  <script src="assets/js/pages/page_contact_list.min.js"></script>
  <!--
<script src="assets/js/pages/dashboard.min.js"></script>
  -->
</body>
</html>
