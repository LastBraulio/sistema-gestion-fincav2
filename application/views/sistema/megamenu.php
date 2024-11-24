
    <nav class="navbar navbar-inverse">
      <div id="container" class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Gestión Tecnica</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/R_tecnico/NuevoRegistroT"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Nuevo Registro  </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/R_tecnico/ListaRT"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Registros</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estadisticas </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Valores Registros </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Reportes </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Consultas </a></li>
              </ul>
            </li> <!-- invetario caprino -->
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Inventario Caprino</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Cabras/insert_cabras"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Nuevo Registro Cabras</a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Cabras/list_cabras"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Registro Cabras </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estadisticas </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Valor Inventario </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Reportes </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Consultas </a></li>
              </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Gestión de Compras</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Compras/nueva_orden_compra"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Nueva Orden de Compra</a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Compras/listar_nueva_orden_compra"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Orden de Compra </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Compras/nueva_compra"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Compra </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Compras/listar_nueva_compra"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Compra </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Factura de Proveedor </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Nota Credito a Proveedor </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Nota Credito a Proveedor </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Pago a Proveedor </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Pago a Proveedor </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estadisticas </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Reportes </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Consultas </a></li>
              </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Gestión General</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/R_general/insert_registro_general"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Nuevo Registro</a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/R_general/listar_registro_general"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Registro </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/R_general/insert_proveedor"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Proveedor </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/R_general/listar_proveedor"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Proveedor </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Consultas </a></li>
              </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Gestión Ventas</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Nuevo Costos</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Costos </a></li>
                <li class="divider"></li>

                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/crear_venta"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Ventas </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/listar_venta"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Ventas</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/crear_cotizacion"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Cotizaciones </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/listar_cotizacion"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Cotizaciones</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/crear_cotizacion"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Cobros </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/listar_cotizacion"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Cobros</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/crear_cliente"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Cliente</a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/listar_cliente"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Cliente</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/crear_nota_credito"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Nota Credito </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/listar_nota_credito"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Nota Credito</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/crear_factura"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Factura </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/listar_factura"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Factura </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/crear_factura"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Contrato </a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/listar_factura"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Facturación de Contrato</a></li>
              </ul> 
            </li>
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Lotes</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Lotes/lote_x_cabra"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Registrar Cabras / Potrero</a></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Lotes/listar_lotes"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Manejo Potrero </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estimacion Tiempo Potrero </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estado Actual Potrero </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Rotaciones de Lotes</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Mantenimiento</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estadisticas </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Reportes </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Consultas </a></li>
              </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Producción - Derivados</h6> </a>
            	<ul role="menu" class="dropdown-menu">
            	<li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Produccion/crear_producto"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Nuevo Producto </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Producto</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Produccion/procesar_produccion"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Registrar Producción - Derivados </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Producción - Derivados</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Inventario Producción Leche</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Inventario Producción Abono </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Inventario Producción Otros </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Control de Calidad </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estimaciones</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Control Bodega</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Reportes </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Consultas </a></li>
              </ul>
            </li>
            <!--<li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Gestión Ventas</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Ventas/crear_venta"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Registrar Ventas </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Listar Ventas</a></li>
                
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Ver Facturas de Ventas</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Mostrar Venta del Dia </a></li>
                
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estadisticas </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Reportes </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Consultas </a></li>
              </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Proveedores</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="<?php echo base_url() ?>index.php/Proveedor/nuevo_proveedor"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Registrar Nuevo Proveedor </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Eliminar Proveedor</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Actualizar Proveedor</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Peticiones de Proveedores</a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Cotizaciones </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Estadisticas </a></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Crear Reportes </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Consultas </a></li>
              </ul>
            </li>
            <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><h6><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Facturas</h6> </a>
            	<ul role="menu" class="dropdown-menu">
                <li><a tabindex="-1" href="#"> Crear Backup Factura </a></li>
                <li><a tabindex="-1" href="#"> Revisiones </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"> Guardar Factura</a></li>
                <li><a tabindex="-1" href="#"> Imprimir Factura </a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#"> Estadisticas </a></li>
                <li><a tabindex="-1" href="#"> Consultas </a></li>
              </ul>
            </li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
