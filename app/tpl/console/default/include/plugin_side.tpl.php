            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="form-group">
                            <label><?php echo $lang->get('Status'); ?></label>
                            <div class="form-text"><?php $str_status = $pluginRow['plugin_status'];
                            include($cfg['pathInclude'] . 'status_process' . GK_EXT_TPL); ?></div>
                        </div>

                        <?php include($cfg['pathInclude'] . 'plugin_detail' . GK_EXT_TPL); ?>
                    </div>
                </div>
            </div>
