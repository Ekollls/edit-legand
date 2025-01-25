<div id="attacker">
    <?php
    function getValue($id){
        return isset($_POST[$id])? $_POST[$id] : 0;
     }
        $tribe = isset($_POST['attackertribe']) ? $_POST['attackertribe'] : 0;
        if ($tribe > 0) {
            $start = ($tribe - 1) * 10 + 1;
            $end = $tribe * 10;
            ?>
            <div class="fighterType">
                <div class="boxes boxesColor red">
                    <div class="boxes-tl"></div>
                    <div class="boxes-tr"></div>
                    <div class="boxes-tc"></div>
                    <div class="boxes-ml"></div>
                    <div class="boxes-mr"></div>
                    <div class="boxes-mc"></div>
                    <div class="boxes-bl"></div>
                    <div class="boxes-br"></div>
                    <div class="boxes-bc"></div>
                    <div class="boxes-contents"><?php echo REPORT_ATTACKER; ?></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="border">
                <table class="fill_in transparent" cellpadding="1" cellspacing="0">
                    <tbody>
                    <tr>
                        <th><?php echo constant('TRIBE' . $tribe); ?></th>
                    </tr>
                    <tr>
                        <td class="details">
                            <table cellpadding="1" cellspacing="1">
                                <tbody>
                                <?php
                                    for ($i = $start; $i <= $end; $i++) {
                                        echo '<tr>'
                                            . '<td class="ico"><img src="img/x.gif" class="unit u' . $i . '" alt="' . constant('U' . $i) . '" title="' . constant('U' . $i) . '"></td>'
                                            . '<td class="desc">' . $technology->unarray[$i] . '</td>'
                                            . '<td class="value"><input class="text" type="text" name="au_' . $i . '" value="' . getValue('au_' . $i) . '" maxlength="60"></td>'
                                            . '<td class="research"><input class="text" type="text" name="ab_' . ($i - $start + 1) . '" value="' . getValue('ab_' . ($i - $start + 1)) . '" maxlength="2"></td>'
                                            . '</tr>';
                                    }
                                ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="fill_in transparent" cellpadding="1" cellspacing="0">
                    <tbody>
                    <tr>
                        <th><?php echo U0; ?></th>
                    </tr>
                    <tr>
                        <td class="details">
                            <table cellpadding="1" cellspacing="1">
                                <tbody>
                                <tr>
                                    <td class="ico"><img src="img/x.gif" class="unit uhero" title="<?php echo FS; ?>">
                                    </td>
                                    <td class="desc"><?php echo FS; ?></td>
                                    <td class="value"><input class="text" type="text" name="a_h_fs"
                                                             value="<?php echo getValue('a_h_fs') == "" ? 0 : getValue('a_h_fs'); ?>"
                                                             maxlength="60"></td>
                                    <td class="research"></td>
                                </tr>
                                <tr>
                                    <td class="ico"><img src="img/x.gif" class="unit uhero"
                                                         title="<?php echo OB . ' ' . AL_POINTS; ?>"></td>
                                    <td class="desc"><?php echo OB . ' ' . AL_POINTS; ?></td>
                                    <td class="value"><input class="text" type="text" name="a_h_ob"
                                                             value="<?php echo getValue('a_h_ob') == "" ? 0 : getValue('a_h_ob'); ?>"
                                                             maxlength="60"></td>
                                    <td class="research"></td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="border">
                <table class="fill_in transparent" cellpadding="1" cellspacing="0">
                    <tbody>
                    <tr>
                        <th><?php echo WARSIM_ETC; ?></th>
                    </tr>
                    <tr>
                        <td class="details">
                            <table cellpadding="1" cellspacing="1">
                                <tbody>
                                <tr>
                                    <td class="ico"><img src="img/x.gif" class="unit uhab"
                                                         alt="<?php echo PF_INHABITANTS; ?>"
                                                         title="<?php echo PF_INHABITANTS; ?>"></td>
                                    <td class="desc"><?php echo PF_INHABITANTS; ?></td>
                                    <td class="value">
                                        <input class="text" type="text" name="ew1"
                                               value="<?php echo getValue('ew1') == "" ? 1 : getValue('ew1'); ?>"
                                               maxlength="5"></td>
                                    <td class="research"></td>
                                </tr>
                                <tr>
                                    <td class="ico"><img src="img/x.gif" class="unit ucata"
                                                         title="<?php echo WARSIM_CTAR1LVL; ?>"></td>
                                    <td class="desc"><?php echo WARSIM_CTAR1LVL; ?></td>
                                    <td class="value"><input class="text" type="text" name="ctar1"
                                                             value="<?php echo getValue('ctar1') == "" ? 0 : getValue('ctar1'); ?>"
                                                             maxlength="2"></td>
                                    <td class="research"></td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        <?php
        }
        $participantstribes = isset($_POST['participantstribes']) ? $_POST['participantstribes'] : array();
        if (count($participantstribes) > 0) {
            foreach ($participantstribes as $tribe) {
                $start = ($tribe - 1) * 10 + 1;
                $end = $tribe * 10;
                ?>
                <div class="fighterType">
                    <div class="boxes boxesColor red">
                        <div class="boxes-tl"></div>
                        <div class="boxes-tr"></div>
                        <div class="boxes-tc"></div>
                        <div class="boxes-ml"></div>
                        <div class="boxes-mr"></div>
                        <div class="boxes-mc"></div>
                        <div class="boxes-bl"></div>
                        <div class="boxes-br"></div>
                        <div class="boxes-bc"></div>
                        <div class="boxes-contents"><?php echo REPORT_PARTICIPANT; ?></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="border">
                    <table class="fill_in transparent" cellpadding="1" cellspacing="0">
                        <tbody>
                        <tr>
                            <th><?php echo constant('TRIBE' . $tribe); ?></th>
                        </tr>
                        <tr>
                            <td class="details">
                                <table cellpadding="1" cellspacing="1">
                                    <tbody>
                                    <?php
                                        for ($i = $start; $i <= $end; $i++) {
                                            echo '<tr>'
                                                . '<td class="ico"><img src="img/x.gif" class="unit u' . $i . '" alt="' . constant('U' . $i) . '" title="' . constant('U' . $i) . '"></td>'
                                                . '<td class="desc">' . $technology->unarray[$i] . '</td>'
                                                . '<td class="value"><input class="text" type="text" name="pu_' . $i . '" value="' . getValue('pu_' . $i) . '" maxlength="60"></td>'
                                                . '<td class="research"><input class="text" type="text" name="pb_' . ($i - $start + 1) . '" value="' . getValue('pb_' . ($i - $start + 1)) . '" maxlength="2"></td>'
                                                . '</tr>';
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            }
        }
    ?>
</div>