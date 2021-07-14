
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col">
            <i class="fas fa-tachometer-alt fa-fw mr-2"></i><?php echo _("Panel de alarmas"); ?>
          </div>
          <div class="col">
            <!--   <button class="btn btn-light btn-icon-split btn-sm service-status float-right">
        <span class="icon"><i class="fas fa-circle service-status-<?php echo $ifaceStatus ?>"></i></span>
        <span class="text service-status"><?php echo strtolower($apInterface) . ' ' . _($ifaceStatus) ?></span>
      </button>-->
          </div>
        </div><!-- /.row -->
      </div><!-- /.card-header -->

      <div class="card-body">
        <div class="row">

          <div class="col-lg-12">
            <div class="card mb-3">
              <div class="card-body">
                <h4 class="card-title"><?php echo _("Historial de alarmas"); ?></h4>
                 <form action="download" method="get">
             <input type="submit" name="someAction" value="Paciente Actual" />
                </form> 

                <form action="downloadPhp.php" method="post">
             <input type="submit" name="someAction" value="Historial" />
                </form> 

                <p>    <h4 class="card-title"><?php echo _("Paciente Actual"); ?></h4>  </p>
                <!--   <div class="col-md-12">
                  <canvas id="divDBChartBandwidthhourly"></canvas>
                </div>-->
                <!--      <div class="alert alert-danger">
              <strong>Valor Mínimo</strong> FIO2: 45[%]   H: 17:45:22
                </div>
                <div class="alert alert-danger">
                <strong>Valor Máximo</strong> VTe: 4445[mL]   H: 21:45:22
                </div>   -->
                <?php
                
                $row = 1;
               // $handle = fopen("/home/pi/respimon2020/res/FP003.csv", "r");
               $handle = fopen("/home/pi/respimon2020/res/actual.hist", "r");
                if (($handle) !== FALSE) {
                  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $num = count($data);

                    echo "<div class=\"alert alert-danger \">
                              <strong>Alarma</strong> $data[0]-$data[1]-$data[2]-$data[3]-$data[4]
                                </div> ";
                    $row++;
                    /* for ($c=0; $c < $num; $c++) {
                                  echo $data[$c] . "<br />\n";
                              }*/
                  }
                  fclose($handle);
                }
                ?>
              </div><!-- /.card-body -->
            </div><!-- /.card -->
          </div>

          <!--    <div class="col-sm-6 align-items-stretch">
            <div class="card h-100">
              <div class="card-body wireless">
                <h4 class="card-title"><?php echo _("Wireless Client"); ?></h4>
                <div class="row ml-1">
                  <div class="col-sm">
                    <div class="row mb-1">
                      <div class="info-item col-xs-3"><?php echo _("Connected To"); ?></div><div class="info-value col-xs-3"><?php echo htmlspecialchars($connectedSSID, ENT_QUOTES); ?></div>
                    </div>
                    <div class="row mb-1">
                      <div class="info-item col-xs-3"><?php echo _("Interface"); ?></div><div class="info-value col-xs-3"><?php echo htmlspecialchars($clientInterface); ?></div>
                    </div>
                    <div class="row mb-1">
                      <div class="info-item col-xs-3"><?php echo _("AP Mac Address"); ?></div><div class="info-value col-xs-3"><?php echo htmlspecialchars($connectedBSSID, ENT_QUOTES); ?></div>
                    </div>
                    <div class="row mb-1">
                      <div class="info-item col-xs-3"><?php echo _("Bitrate"); ?></div><div class="info-value col-xs-3"><?php echo htmlspecialchars($bitrate, ENT_QUOTES); ?></div>
                    </div>
                    <div class="row mb-1">
                      <div class="info-item col-xs-3"><?php echo _("Signal Level"); ?></div><div class="info-value col-xs-3"><?php echo htmlspecialchars($signalLevel, ENT_QUOTES); ?></div>
                    </div>
                    <div class="row mb-1">
                      <div class="info-item col-xs-3"><?php echo _("Transmit Power"); ?></div><div class="info-value col-xs-3"><?php echo htmlspecialchars($txPower, ENT_QUOTES); ?></div>
                    </div>
                    <div class="row mb-1">
                      <div class="info-item col-xs-3"><?php echo _("Frequency"); ?></div><div class="info-value col-xs-3"><?php echo htmlspecialchars($frequency, ENT_QUOTES); ?></div>
                    </div>
                  </div>
                  <div class="col-md d-flex">
                    <script>var linkQ = <?php echo json_encode($strLinkQuality); ?>;</script>
                    <div class="chart-container">
                      <canvas id="divChartLinkQ"></canvas>
                    </div>
                  </div>
                </div><!--row
              </div><!-- /.card-body 
            </div><!-- /.card 
          </div><!-- /.col-md-6 -->
          <!--  <div class="col-sm-6">
            <div class="card h-100 mb-3">
              <div class="card-body">
                <h4 class="card-title"><?php echo _("Connected Devices"); ?></h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <?php if ($bridgedEnable == 1) : ?>
                          <th><?php echo _("MAC Address"); ?></th>
                        <?php else : ?>
                          <th><?php echo _("Host name"); ?></th>
                          <th><?php echo _("IP Address"); ?></th>
                          <th><?php echo _("MAC Address"); ?></th>
                        <?php endif; ?>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if ($bridgedEnable == 1) : ?>
                          <tr>
                            <td><small class="text-muted"><?php echo _("Bridged AP mode is enabled. For Hostname and IP, see your router's admin page."); ?></small></td>
                          </tr>
                        <?php endif; ?>
                        <?php foreach (array_slice($clients, 0, 2) as $client) : ?>
                        <tr>
                          <?php if ($arrHostapdConf['BridgedEnable'] == 1) : ?>
                            <td><?php echo htmlspecialchars($client, ENT_QUOTES) ?></td>
                          <?php else : ?>
                            <?php $props = explode(' ', $client) ?>
                            <td><?php echo htmlspecialchars($props[3], ENT_QUOTES) ?></td>
                            <td><?php echo htmlspecialchars($props[2], ENT_QUOTES) ?></td>
                            <td><?php echo htmlspecialchars($props[1], ENT_QUOTES) ?></td>
                          <?php endif; ?>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                  </table>
                  <?php if (sizeof($clients) > 2) : ?>
                      <div class="col-lg-12 float-right">
                        <a class="btn btn-outline-info" role="button" href="<?php echo $moreLink ?>"><?php echo _("More"); ?>  <i class="fas fa-chevron-right"></i></a>
                      </div>
                  <?php elseif (sizeof($clients) == 0) : ?>
                      <div class="col-lg-12 mt-3"><?php echo _("No connected devices"); ?></div>
                  <?php endif; ?>
                </div><!-- /.table-responsive 
              </div><!-- /.card-body 
            </div><!-- /.card 
          </div> /.col-md-6 
        </div><!-- /.row 

        <div class="col-lg-12 mt-3">
          <div class="row">
            <form action="wlan0_info" method="POST">
                <?php echo CSRFTokenFieldTag() ?>
                <?php if (!RASPI_MONITOR_ENABLED) : ?>
                    <?php if (!$wlan0up) : ?>
                    <input type="submit" class="btn btn-success" value="<?php echo _("Start") . ' ' . $clientInterface ?>" name="ifup_wlan0" />
                    <?php else : ?>
                    <input type="submit" class="btn btn-warning" value="<?php echo _("Stop") . ' ' . $clientInterface ?>"  name="ifdown_wlan0" />
                    <?php endif ?>
                <?php endif ?>
              <button type="button" onClick="window.location.reload();" class="btn btn-outline btn-primary"><i class="fas fa-sync-alt"></i> <?php echo _("Refresh") ?></a>
            </form>
          </div>
        </div>

      </div><!-- /.card-body 
      <div class="card-footer"><?php echo _("Information provided by ip and iw and from system"); ?></div>
    </div><!-- /.card -->
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
      <script type="text/javascript" <?php //echo ' nonce="'.$csp_page_nonce.'"'; 
                                      ?>>
        // js translations:
        var t = new Array();
        t['send'] = '<?php echo addslashes(_('Send')); ?>';
        t['receive'] = '<?php echo addslashes(_('Receive')); ?>';
      </script>