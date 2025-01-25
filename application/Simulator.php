<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
/*
class Simulatorss
{

    const BASE_VILLAGE_DEF = 10;
    const SCOUT_DEF = 20;
    const SCOUT_OFF = 35;
    const LONE_ATTACKER_THRESHOLD = 84;
    protected $off = [
        [0 => 40, 30, 70, 0, 120, 180, 60, 75, 50, 0], //Roman
        [0 => 40, 10, 60, 0, 55, 150, 65, 50, 40, 10], //Teuten
        [0 => 15, 65, 0, 90, 45, 140, 50, 70, 40, 0], // Gual
        [0 => 10, 20, 60, 80, 50, 100, 250, 450, 200, 600],
        [0 => 20, 65, 100, 0, 155, 170, 250, 60, 80, 30],
        [0 => 10, 30, 65, 0, 50, 110, 55, 65, 40, 0],
        [0 => 35, 50, 0, 120, 115, 180, 65, 45, 40, 0],
    ];
    protected $def_i = [
        [0 => 35, 65, 40, 20, 65, 80, 30, 60, 40, 80],
        [0 => 20, 35, 30, 10, 100, 50, 30, 60, 60, 80],
        [0 => 40, 35, 20, 25, 115, 50, 30, 45, 50, 80],
        [0 => 25, 35, 40, 66, 70, 80, 140, 380, 170, 440],
        [0 => 35, 30, 90, 10, 80, 140, 120, 45, 50, 40],
        [0 => 30, 55, 50, 20, 110, 120, 30, 55, 50, 80],
        [0 => 40, 30, 20, 30, 80, 60, 30, 55, 50, 80],
    ];
    protected $def_c = [
        [0 => 50, 35, 25, 10, 50, 105, 75, 10, 30, 80],
        [0 => 5, 60, 30, 5, 40, 75, 80, 10, 40, 80],
        [0 => 50, 20, 10, 40, 55, 165, 105, 10, 50, 80],
        [0 => 20, 40, 60, 50, 33, 70, 200, 240, 250, 520],
        [0 => 50, 10, 75, 0, 50, 80, 150, 10, 50, 40],
        [0 => 20, 40, 20, 10, 50, 150, 95, 10, 50, 80],
        [0 => 30, 10, 10, 15, 70, 40, 90, 10, 50, 80],
    ];
    private $mode = 4; // 9 is special server | 4 is T4 | 3 is T3 | 2 is T2
    protected $wall_durability = [0 => 1, 1 => 5, 2 => 2, 3 => 1, 4 => 1, 5 => 5, 6 => 1];
    protected $wall_base = [0 => 1.03, 1 => 1.02, 2 => 1.025, 3 => 1, 4 => 1.03, 5 => 1.025, 6 => 1.015];
    protected $wall_extra = [
        0 => 10,
        1 => 6,
        2 => 8,
        3 => 0,
        4 => 10,
        5 => 8,
        6 => 6
    ]; //TODO: Huns wall needs update
    protected $administrator_effect = [
        0 => [20, 30],
        1 => [20, 25],
        2 => [20, 25],
        3 => [0, 0],
        4 => [200, 200],
        5 => [20, 25],
        6 => [20, 25]
    ];
    protected $upkeep = [
        [0 => 1, 1, 1, 2, 3, 4, 3, 6, 5, 1, 6],
        [0 => 1, 1, 1, 1, 2, 3, 3, 6, 4, 1, 6],
        [0 => 1, 1, 2, 2, 2, 3, 3, 6, 4, 1, 6],
        [0 => 1, 1, 1, 1, 2, 2, 3, 3, 3, 5, 0],
        [0 => 1, 1, 1, 1, 2, 3, 6, 5, 0, 0, 6],
        [0 => 1, 1, 1, 2, 2, 3, 3, 6, 4, 1, 6],
        [0 => 1, 1, 2, 2, 2, 3, 3, 6, 4, 1, 6],
    ];
    protected $is_cavalary = [
        [3 => 1, 4 => 1, 5 => 1],
        [3 => 1, 4 => 1, 5 => 1],
        [2 => 1, 3 => 1, 4 => 1, 5 => 1],
        [],
        [4 => 1, 5 => 1],
        [3 => 1, 4 => 1, 5 => 1],
        [3 => 1, 4 => 1, 5 => 1],
    ];

    public function __construct()
    {
    }
    public function slm()
    {
        return 'slm';
    }
    public function init($data)
    {

        // Extracting the attacker units
        $attacker_units = [];
        for ($i = 1; $i <= 10; $i++) {
            $attacker_units[$i - 1] = $this->int_check_limit($data, "au_$i", 0, 1e99);
        }
        $attacker_units[10] = $this->int_check_limit($data, "a_h_fs", 0, 1); // Hero

        // Extracting the defender units
        $defender_units = [];
        for ($i = 31; $i <= 40; $i++) {
            $defender_units[$i - 31] = $this->int_check_limit($data, "du_$i", 0, 1e99);
        }
        $defender_units[10] = $this->int_check_limit($data, "d_h_fs", 0, 1); // Hero

        // Initialize the data array for the function
        $data = [
            "R" => $this->int_check_limit($data, 'attack_type', 0, 1) == 3, // is Raid
            "attacker" => [
                "kid" => $this->int_check_limit($data, 'uid', 0, 1e8),
                "tribe" => $this->int_check_limit($data, 'attackertribe', 0, 7),
                "units" => $attacker_units,
                "hero" => [
                    "cages" => $this->int_check_limit($data, "a_h_ob", 0, 1e99),
                    "other" => $this->int_check_limit($data, "a_h_fs", 0, 1),
                ],
            ],
            "trapped2killed" => [],
            "defender" => [
                "r" => $this->int_check_limit($data, 'defendertribe', 0, 7) - 1, // race - 1
                "t" => 86400, // traps
                "p" => 100, // pop (placeholder, will be updated later)
                "rpLevel" => 20, // residence palace level (placeholder, will be updated later)
                "wLevel" => 0, // wall level (placeholder, will be updated later)
                "stone" => 0, // stonemason level (placeholder, will be updated later)
                "units" => $defender_units,
                "artifacts" => [
                    "durability" => 0, // Durability artifact effect (placeholder, will be updated later)
                    "scout" => 0, // Scout artifact effect (placeholder, will be updated later)
                ],
                "hero" => [
                    "d_h_db" => $this->int_check_limit($data, "d_h_db", 0, 1),
                    "d_h_fs" => $this->int_check_limit($data, "d_h_fs", 0, 1),
                ],
            ],
            "waves" => [
                [
                    "r" => $this->int_check_limit($data, 'ew1', 0, 7),
                    "target" => $this->int_check_limit($data, 'ctar1', 0, 1),
                    "side" => "off", // Assuming wave is for the offense, update logic as required
                    "u" => $attacker_units,
                    "h" => [
                        "cages" => $this->int_check_limit($data, "a_h_ob", 0, 1e99),
                    ],
                    "p" => $this->int_check_limit($data, 'uid', 0, 1e8), // Placeholder for pop, update as required
                ],
                // Add more waves if required
            ],
        ];
        // Checking if keys exist before accessing them
        foreach ($data['waves'] as &$wave) {
            for ($u = 0; $u < 10; $u++) {
                $wave['u'][$u] = isset($wave['u'][$u]) ? $this->int_check_limit($wave['u'], $u, 0, 1e99) : 0;
            }
            $wave['u'][10] = isset($wave['u'][10]) ? $wave['u'][10] : 0;
            if ($wave['side'] == "off") {
                $wave['u'][8] = isset($wave['u'][8]) ? min($wave['u'][8], 3) : 0;
                $wave['u'][9] = isset($wave['u'][9]) ? min($wave['u'][9], 9) : 0;
            }
        }

        // Checking for hero
        foreach ($data['waves'] as &$wave) {
            if (!isset($wave['u'][10]) || !$wave['u'][10]) {
                $wave['u'][10] = isset($wave['hero']) && $wave['hero'] ? 1 : 0;
            }
        }

        // Fixing 'U' undefined index errors
        foreach ($data['waves'] as &$wave) {
            for ($i = 0; $i <= 10; $i++) {
                $wave['U'][$i] = isset($wave['U'][$i]) ? $wave['U'][$i] : 0;
            }
        }

        $pob = $this->int_check_limit($data['defender'], 'r', 0, 7);
        if ($pob == 3) {
            $data['defender']['t'] = $this->int_check_limit(
                $data['defender'],
                "t",
                0,
                8400 * TRAPPER_CAPACITY
            );
        } else {
            $data['defender']['t'] = 0;
        }
        $trapped2killed = isset($data['trapped2killed']) ? $data['trapped2killed'] : [];
        $def_pop = $this->int_check_limit($data['defender'], "p", 1, 1e8);
        if ($pob == 4)
            $def_pop = 500;
        $rp_lvl = $this->int_check_limit($data['defender'], 'rpLevel', 0, 20);
        $wl = $this->int_check_limit($data['defender'], 'wLevel', 0, 20);
        $wall_dur = $this->wall_durability[$pob];
        $wall_b = $this->wall_base[$pob];
        $stone = 1 + $this->int_check_limit($data['defender'], 'stone', 0, 20) / 10;
        if (!isset($data['defender']['artifacts'])) {
            $data['defender']['artifacts'] = ["durability" => 0, 'scout' => 0];
        }
        $art_dur = $this->art_effect($data['defender']['artifacts'], 'durability', 10);
        $art_scout_def = $this->art_effect($data['defender']['artifacts'], 'scout', 10);
        if ($art_dur < 0) {
            $art_dur = -1 / $art_dur;
        }
        if ($art_dur == 0) {
            $art_dur = 1;
        }
        //Natars in v < 4 does not have wall :|
        if ($pob == 4 and $this->mode < 4) {
            $wl = 0;
            $stone = min($data['defender']['stone'], 1);
        }
        $def_nature_only = TRUE;
        foreach ($data['waves'] as $idx => $wave) {
            if ($wave['r'] <> 3 && $wave['side'] == "def") {
                $def_nature_only = FALSE;
                break;
            }
        }
        $report = [];
        $def_armies = [];
        foreach ($data['waves'] as $idx => $wave) {
            $no_morale = isset($wave['isWW']);
            for ($u = 0; $u < 10; $u++) {
                $wave['u'][$u] = $this->int_check_limit($wave['u'], $u, 0, 1e99);
            }
            if ($wave['side'] == "off") { // no more than
                $wave['u'][8] = min($wave['u'][8], 3); // 3 senators
                $wave['u'][9] = min($wave['u'][9], 9); // 9 settlers
            }
            // add hero to units
            if (!isset($wave['u'][10]) || !$wave['u'][10]) {//fixed.
                $wave['u'][10] = isset($wave['h']) && $wave['h'] ? 1 : 0;
            }
            $wave['r'] = $r = $this->int_check_limit($wave, 'r', 0, 7);
            // no hero for nature or T2.5
            if ($r > 2 or $this->mode == 2) {
                $wave['u'][10] = 0;
            }
            if ($wave['side'] == "def") {
                $def_armies[$idx] = $wave;
            }
            //last one is always offense units process over here
            if ($wave['side'] == "off") {
                $tr = array_fill(0, 11, 0);
                // cages
                //if is cage attack to an unoccupied oasis let's capture units and let the process free

                if ($data['defender']['r'] == 3 && $def_nature_only && $wave['u'][10] > 0 && $this->mode == 4 && $wave['hero']['cages']) {
                    $cages = $this->int_check_limit($wave['hero']['cages'], 3, 0, 1e8); //actually no limit :|
                    $caged = array_fill(0, 10, 0);
                    $total = array_fill(0, 10, 0);
                    foreach ($def_armies as $army) {
                        for ($u = 0; $u < 10; $u++) {
                            $total[$u] += $army['u'][$u];
                        }
                    }
                    $this->move_to_cages($total, $cages, $caged);
                    $this->finalize_losses($report, $def_armies, 0, 0, $wave, $tr, [], ['caged' => $caged]);
                    for ($u = 0; $u < 10; $u++) {
                        if (!$caged[$u]) {
                            continue;
                        }
                        foreach ($def_armies as $idxx => &$army) {
                            if ($caged[$u] < $army['u'][$u]) {
                                $army['u'][$u] -= $caged[$u];
                                $caged[$u] = 0;
                                break;
                            } else {
                                $caged[$u] -= $army['u'][$u];
                                $army['u'][$u] = 0;
                            }
                        }
                    }
                    continue;
                }
                $off_pop = $this->int_check_limit($wave, 'p', 1, 199999);
                $def_pop = max($def_pop, 1);
                $pop_ratio = $off_pop / $def_pop;
                if (0) {
                    $pop_ratio = 1;
                }
                // check for recon. operation
                $sui = $this->getSpyId($r + 1) - 1;
                if ($sui > 0 and array_sum($wave['u']) == $wave['u'][$sui]) {
                    $offense = $wave['u'][$sui] * $this->stat_with_upg(
                        20,
                        $this->upkeep[$r][$sui],
                        $wave['U'][$sui]
                    );
                    $offense *= $this->art_effect($wave, 'S', 10) * ($no_morale ? 1 : $this->common_morale($pop_ratio));
                    $defense = 0;
                    foreach ($def_armies as $army) {
                        $r = $army['r'];
                        $sui = $this->getSpyId($r + 1) - 1;
                        if ($sui < 0) {
                            continue;
                        }
                        $defense += $army['u'][$sui] * $this->stat_with_upg(
                            20,
                            $this->upkeep[$r][$sui],
                            $army['U'][$sui]
                        );
                    }
                    $defense *= $art_scout_def * round(pow($wall_b, $wl), 3); // wall
                    if ($defense == 0) {
                        $off_losses = 0;
                    } else {
                        $x = pow($offense / $defense, 1.5);
                        $off_losses = $x ? min(1 / $x, 1) : 1;
                    }
                    $this->finalize_losses($report, $def_armies, $off_losses, 0, $wave, $tr, ["isSpy" => TRUE]);
                    continue;
                }
                // init
                $b_lvls = $this->target_levels($wave);
                $info = [];
                $lone_attacker = array_sum($wave['u']) == 1;
                $wave['x'] = $this->int_check_limit($wave, 'x', 1, 21);
                /*
                if ($wave['x'] > 1) {
                    $wave['x']--;
                    $w--;
                }
               
                //offense troops got trapped buddy :|
                if ($data['defender']['t'] and $this->mode >= 3) {
                    $tr = $this->move_to_traps($wave['u'], $data['defender']['t']);
                }
                if (array_sum($tr)) {
                    ///a little change here for unique IDs in freeing trapped
                    $trapped2killed[($data['attacker']['kid'])] = $tr;
                }
                $offense = $this->calc_offense($wave);
                if ($pob == 4) {
                    $offense['b'] *= 1 + $offense['n'] / 100; // natarian horns
                    $offense['b'] *= 1.015; // correction factor of unknown origin
                }
                /*
                if ($w == 2) { $offense['b'] *= 1.01518367; } // 1.015182-4
                if ($w == 3) { $offense['b'] *= 1.015327; } // 1.015323-31
                if ($w == 4) { $offense['b'] *= 1.015782; }  // 1.015781-4
                if ($w == 5) { $offense['b'] *= 1.0151; }  // 1.0149-53
              
                $this->finalize_stats($offense);
                if (!$offense['t']) {
                    //no offense power :|
                    if (array_sum($tr)) {
                        $this->finalize_losses($report, $def_armies, 0, 0, $wave, $tr, ['none_return' => ['']]);
                        continue;
                    }
                    //trigger_error("zero offense", E_USER_ERROR);
                }
                $defense = $this->calc_total_defense($def_armies);
                $this->finalize_stats($defense);
                $total = array_sum($wave['u']);
                foreach ($def_armies as $army) {
                    $total += array_sum($army['u']);
                }
                $immensity = $this->calc_diffusion($total);
                // adduced defense
                $ip = round($offense['i'] / $offense['t'], 4);
                $cp = round($offense['c'] / $offense['t'], 4);
                $defense['t'] = ($defense['i'] * $ip + $defense['c'] * $cp);
                if ($pob != 3) {
                    $defense['t'] += 2 * pow($rp_lvl, 2);
                }
                $defense['t'] += 10;
                if ($this->mode == 4) {
                    $defense['t'] += $this->wall_extra[$pob] * $wl;
                }
                $wall_bonus = round(pow($wall_b, $wl), 3);
                // si-si, russo matroso, oblique amorale
                $pts_ratio = $this->remorale($offense['t'], $defense['t'], $no_morale ? 1 : $pop_ratio, $wall_bonus);
                $x = pow($pts_ratio, $immensity);
                // raid
                if ($data['R'] == TRUE) {
                    $off_losses = 1 / (1 + $x);
                    $def_losses = $x / (1 + $x);
                    if ($lone_attacker && $this->lone_dies($offense, $pop_ratio)) {
                        $off_losses = 1;
                    }
                    $this->finalize_losses($report, $def_armies, $off_losses, $def_losses, $wave, $tr);
                    continue;
                }
                // normal losses
                $off_losses = $x ? min(1 / $x, 1) : 1;
                $def_losses = min($x, 1);

                $siege_percent = $this->sigma(pow($pts_ratio, 1.5));
                $d = $stone * $art_dur;
                // using rams
                if ($wave['u'][6] && $wl) { //if attacker has ram and defender had wall
                    $up = $wave['U'][6];
                    $rams = $wave['u'][6];
                    $mwl = $this->early_ramming($wl, $rams, $siege_percent, $up, $d, $wall_dur);
                    // recalc wall effect
                    $wall_bonus = round(pow($wall_b, $mwl), 3);
                    $pts_ratio = $this->remorale(
                        $offense['t'],
                        $defense['t'],
                        $no_morale ? 1 : $pop_ratio,
                        $wall_bonus
                    );
                    $siege_percent = $this->sigma(pow($pts_ratio, 1.5));
                    $x = pow($pts_ratio, $immensity);
                    // get final wall level
                    $rams = $this->sigma(pow($pts_ratio, $immensity)) * $wave['u'][6];
                    $off_losses = min(1 / $x, 1);
                    $def_losses = min($x, 1);
                    $info['wall'] = [$wl]; //from level
                    $wl = $this->demolish($wl, $rams, $up, $wall_dur, $d);
                    $info['wall'][1] = $wl; //to level
                }
                // using cats
                if ($wave['u'][7] && $b_lvls[0]) { //if has ram and target is selected
                    $info['bl'] = [];
                    $up = $wave['U'][7];
                    $moral = $no_morale ? 1 : $this->limit(0.333, pow($pop_ratio, -0.3), 1);
                    $cats = $wave['u'][7] * $siege_percent * $moral;
                    if ($b_lvls[1] and $wave['u'][7] >= 20) { // two targets
                        $cats /= 2;
                        $info['bl'] = [0, 0, $b_lvls[1], $this->demolish($b_lvls[1], $cats, $up, 1, $d),];
                    }
                    // one target always
                    $info['bl'][0] = $b_lvls[0]; //from level
                    // WW ignores durability artifacts effect
                    if (isset($wave['isWW'])) {
                        $d /= $art_dur;
                    }
                    $info['bl'][1] = $this->demolish($b_lvls[0], $cats, $up, 1, $d); //to level
                }
                $alive_admins = round($wave['u'][8] * (1 - $off_losses));
                //just if not have palace or residence :|
                //get residence level in outher battle ;)
                if ($alive_admins && $r < 3) {
                    $af = $this->administrator_effect[$r];
                    $moral_bonus = $no_morale ? 1 : $this->common_morale($pop_ratio);
                    $ld = (empty($data['defender']['bigParty']) ? 0 : 5) - (empty($data['defender']['bigParty']) ? 0 : 5);
                    $c = $moral_bonus * $alive_admins / (empty($wave["B"]) || ($r != 1) ? 1 : 2);
                    $info['loy'] = [
                        round(($af[0] + $ld) * $c), //min
                        round(($af[1] + $ld) * $c) //max
                    ];
                }
                if ($lone_attacker and $this->lone_dies($offense, $pop_ratio)) {
                    $off_losses = 1;
                }
                //free own or alliance trapped units :|
                if (!empty($trapped2killed) and $off_losses < 1) {
                    $info['free'] = [];
                    if ($this->mode == 4) {
                        foreach ($trapped2killed as $trapped_unique => $trapped_wave) {
                            $info['free'][$trapped_unique] = ["sum" => array_sum($trapped_wave), "free" => [],];
                            //I added hero here :|
                            for ($u = 0; $u < ($trapped_wave[10] ? 11 : 10); $u++) {
                                if (!$trapped_wave[$u]) {
                                    continue;
                                }
                                //freed num
                                if (!isset($info['free'][$trapped_unique]['free'][$u])) {
                                    $info['free'][$trapped_unique]['free'][$u] = 0;
                                }
                                $info['free'][$trapped_unique]['free'][$u] += ceil($trapped_wave[$u] * 0.75);
                            }
                        }
                    }
                    $trapped2killed = [];
                }
                $this->finalize_losses($report, $def_armies, $off_losses, $def_losses, $wave, $tr, $info);
            }
        }
        return $report;
    }
    private static function getSpyId($tribe)
    {
        if ($tribe == 3 || $tribe == 7) {
            return 3;
            //this.data['units'][3];
        } else {
            return 4;
            //this.data['units'][4];
        }
    }

    private function int_check_limit($arr, $name, $low, $high)
    {
        if (!array_key_exists($name, $arr)) {
            return $low;
        }
        return $this->limit($low, $high, (int) $arr[$name]);
    }

    private function limit($low, $value, $high)
    {
        if ($value < $low) {
            return $low;
        }
        if ($value > $high) {
            return $high;
        }
        return $value;
    }

    private function art_effect($arr, $name, $limit)
    {
        if (!array_key_exists($name, $arr)) {
            return 1;
        }
        $value = $this->limit(-$limit, (int) $arr[$name], $limit);
        if ($value < 0) {
            return -1 / $value;
        }
        if ($value == 0) {
            return 1;
        }
        return $value;
    }

    private function move_to_cages($units, $cages, &$caged)
    {
        $UNITS = count($units)/* - isset($units["hero"]) ? 1 : 0
        ;
        $total = array_sum($units);
        if ($cages >= $total) {
            $cages = $total;
            $caged = $units;
            return;
        }
        $remainder = [];
        for ($u = 0; $u < $UNITS; $u++) {
            if ($units[$u]) {
                $remainder[$u] = $units[$u];
            }
        }
        $len = count($remainder);
        $min = min($remainder);
        while ($len and $len * $min < $cages) {
            $cages -= $len * $min;
            foreach ($remainder as $idx => $value) {
                $remainder[$idx] -= $min;
                $caged[$idx] += $min;
            }
            $key = array_search(0, $remainder);
            do {
                unset($remainder[$key]);
                $len--;
                $key = array_search(0, $remainder);
            } while ($key !== FALSE);
            //echo "$cages, $len, $min<br/>";
            $min = min($remainder);
        }
        if ($cages > 0 and $min != 0) {
            $n = floor($cages / $len);
            $d = $cages - $len * $n;
            foreach ($remainder as $idx => $value) {
                $nn = $n;
                if (--$d >= 0) {
                    $nn++;
                }
                $remainder[$idx] -= $nn;
                $caged[$idx] += $nn;
            }
        }
    }

    private function finalize_losses(&$report, &$def_armies, $off_l, $def_l, $offWave, $trapped, $info = [], $extra = [])
    {
        $revived = [];
        $dead_heroes = ["off" => 0, "def" => []];
        $off_units = $offWave['u']; // copy to save whether there was a hero
        foreach ($def_armies as $idx => &$army) {
            /*if ($_revived = get_revived($army, $def_l)) {
                $r = $army['r'];
                if (!isset($revived[$r])) $revived[$r] = array_fill(0, 10, 0);
                for ($u = 0; $u < 10; $u++) $revived[$r][$u] += $_revived[$u];
            } //revive does not work for defenses.
            $a =& $army['u'];
            for ($u = 0; $u < 10; $u++) {
                $a[$u] = round((1 - $def_l) * $a[$u]);
            }
            if (!isset($dead_heroes['def'][$idx])) {
                $dead_heroes['def'][$idx] = 0;
            }
            $dead_heroes['def'][$idx] += $this->hero_check_kill($army, $def_l);
        }
        //for($u = 0; $u < 11; $u++) $offWave['u'][$u] += $trapped[$u];
        if ($_revived = $this->get_revived($offWave, $off_l)) {
            $revived['off'] = $_revived;
        }
        $dead_heroes['off'] = $this->hero_check_kill($offWave, $off_l);
        $arr = [
            'trapped' => $trapped,
            'revived' => $revived,
            'losses' => [$off_l, $def_l],
            'dead_heroes' => $dead_heroes,
            'info' => $info,
        ];
        foreach ($extra as $field => $value) {
            $arr[$field] = $value;
        }
        $report[] = $arr;
    }

    private function hero_check_kill(&$wave, $losses)
    {
        if (empty($wave['u'][10])) {
            return 0;
        }
        if (!isset($wave['hero']['health'])) {
            //trigger_error("health is not defined in hero", E_USER_WARNING);
        }
        if (!isset($wave['hero']['arm'])) {
            //trigger_error("armor is not defined in hero", E_USER_WARNING);
        }
        $lossPercent = max($losses * 100 - $wave['hero']['arm'], 0);
        if ($lossPercent >= min(90, $wave['hero']['health'])) {
            $wave['u'][10] = 0;
            return 1;
        } else {
            $wave['hero']['health'] -= $lossPercent;
            return 0;
        }
    }

    private function get_revived(&$army, $loss)
    {
        if (empty($army['h'])) {
            $bandages = 0;
        } else {
            if (!isset($army['hero']['bandage'])) {
                //trigger_error("bandages are not defined in hero", E_USER_WARNING);
            }
            if (!isset($army['hero']['bandage']['num'])) {
                //trigger_error("num are not defined in bandages", E_USER_WARNING);
            }
            if (!isset($army['hero']['bandage']['eff'])) {
                //trigger_error("eff are not defined in bandage", E_USER_WARNING);
            }
            $dead = array_fill(0, 10, 0);
            for ($u = 0; $u < 10; $u++) {
                $un = $army['u'][$u];
                $dead[$u] = $un - round($un * (1 - $loss));
            }
            $total = array_sum($dead);
            $bandages = min($army['hero']['bandage']['num'], ceil($total * $army['hero']['bandage']['eff'] / 100));
            $army['hero']['bandage']['num'] -= $bandages;
        }
        if (!$bandages) {
            return FALSE;
        }
        return $this->move_to_traps($dead, $bandages);
    }

    private function move_to_traps(&$units, &$traps)
    {
        $len = count($units);
        $atkrs_total = array_sum($units);
        $used_traps = min($traps, $atkrs_total);
        $trapped = [];
        $tr = 0;
        for ($u = 0; $u < $len; $u++) {
            $tr += $trapped[$u] = floor($units[$u] * $used_traps / $atkrs_total);
        }
        for ($u = 0; $u < $len; $u++) {
            if ($tr == $used_traps) {
                break;
            }
            if ($units[$u]) {
                $trapped[$u]++;
                $tr++;
            }
        }
        for ($u = 0; $u < $len; $u++) {
            $units[$u] -= $trapped[$u];
        }
        $traps -= array_sum($trapped);
        return $trapped;
    }

    private function stat_with_upg($stat, $upkeep, $lvl)
    {
        if ($this->mode == 4) {
            $upkeep /= 1.007;
            return round($stat + ($stat + 300 * $upkeep / 7) * (pow(1.007, $lvl) - 1) + $upkeep * 0.0021, 4);
        } else {
            return round($stat + ($stat + 300 * $upkeep / 7) * (pow(1.007, $lvl) - 1), 4);
        }
    }

    private function common_morale($pop)
    {
        $value = round(pow($pop, -0.2), 3);
        if ($value < 0.667) {
            $value = 0.667;
        }
        if ($value > 1.0) {
            $value = 1.0;
        }
        return $value;
    }

    private function target_levels($wave)
    {
        $bl = [0, 0];
        if (isset($wave['b'])) {
            if ($wave['b'][0]) {
                $bl = $wave['b'];
            } elseif ($wave['b'][1]) {
                $bl[0] = $wave['b'][1];
            }
        }
        return $bl;
    }

    private function calc_offense(&$wave)
    {
        // init
        $offense = ['i' => 0, 'c' => 0, 'b' => 1];
        // units
        $item_bonus = $this->item_unit_bonus($wave);
        $this->unit_offense($wave, $item_bonus, $offense);
        // hero
        if (!empty($wave['u'][10])) {
            $this->hero_boni($wave, $offense);
        }
        //plus offense in T2.5
        if ($this->mode == 2 and isset($wave['P'])) {
            $offense['b'] *= 1.1;
        }
        // brewery
        if (!isset($wave['B'])) {
            //trigger_error("brewery(B) is not defined offense wave", E_USER_WARNING);
        }
        if ($wave['r'] == 1 and isset($wave['B']) and $this->mode >= 3) {
            $offense['b'] *= 1 + (int) $wave['B'] * 0.01;
        }
        return $offense;
    }

    private function item_unit_bonus($wave)
    {
        $item_bonus = array_fill(0, 10, 0);
        if ($wave['r'] >= 3) {
            return $item_bonus;
        }
        // set weapon unit bonus
        /* //right hand
        if(isset($wave['i']) and ($this->mode == 4) and $id = $wave['hero']['rightHand']) {
            $item =& $this->item_stats[$id];
            foreach($item['unit'] as $u => $value) {
                $this->item_stats[$u % 10] = $value;
            }
        }
        return $item_bonus;
    }

    private function unit_offense($wave, $item_bonus, &$offense)
    {
        $r = $this->int_check_limit($wave, 'r', 0, 7);
        for ($u = 0; $u < 10; $u++) {
            //changed r<=0 and $u<=7
            $up_level = $r == 3 ? 0 : (($u <= 7) ? $wave['U'][$u] : 0);
            $value = $this->stat_with_upg($this->off[$r][$u], $this->upkeep[$r][$u], $up_level);
            $value += $item_bonus[$u];
            $type = isset($this->is_cavalary[$r][$u]) ? 'c' : 'i';
            $offense[$type] += $value * $wave['u'][$u];
        }
    }

    private function hero_boni(&$wave, &$stats)
    {
        if ($this->mode == 2) {
            return;
        }
        $arm = 0;
        $str = 0;
        // items
        if ($this->mode == 4 and $wave['hero']) {
            /*for($i = 0; $i < 3; $i++){
                if ($id = $wave['i'][$i]) {
                    if (isset($item_stats[$id]['hero'])) {
                        $str += $item_stats[$id]['hero'];
                    }
                    if (isset($item_stats[$id]['arm'])) {
                        $arm += $item_stats[$id]['arm'];
                    }
                }
            }
            // natarian horns
            if ($id = $wave['i'][1]) {
                $item =& $item_stats[$id];
                if (isset($item['nat'])) {
                    $stats['n'] = $item['nat'];
                }
            }
            
            if (!isset($wave['hero']['arm'])) {
                //trigger_error("armor is not defined in hero", E_USER_WARNING);
                $wave['hero']['arm'] = 0;
            }
            if (!isset($wave['hero']['str'])) { //streth
                //trigger_error("armor is not defined in hero", E_USER_WARNING);
                $wave['hero']['str'] = 0;
            }
            if (!isset($wave['hero']['n'])) { //streth
                //trigger_error("n is not defined in hero", E_USER_WARNING);
                $wave['hero']['n'] = 0;
            }
            $str += $wave['hero']['str'];
            $arm += $wave['hero']['arm'];
            $stats['n'] = $wave['hero']['n'];
        }
        $wave['a'] = $arm;
        $this->set_hero_stats($wave, $this->mode, $str, $stats);
    }

    private function set_hero_stats($wave, $mode, $str, &$stats)
    {
        if ($this->mode == 2) {
            return;
        }
        $r = $wave['r'];
        if (!isset($wave['hero']['power']) || $wave['hero']['power'] > 100) {
            ///trigger_error("power is not defined in hero in T4", E_USER_WARNING);
        }
        $s = isset($wave['hero']['total_power']) ? 0 : $wave['hero']['power'];
        if ($this->mode == 4) { // T4 > 0
            if (!isset($wave['hero'][($wave['side']) . 'Bonus'])) { //nr musts be unitIdtoNr - 1
                //trigger_error((($wave['side']).'Bonus')." is not defined in hero in T4", E_USER_WARNING);
            }
            $st = $this->hero_str4($wave, $s, $r, $str);
        } else { // T3
            if (!isset($wave['hero']['nr'])) { //nr musts be unitIdtoNr - 1
                //trigger_error("nr is not defined in hero in T3", E_USER_WARNING);
            }
            $st = $this->hero_str3($wave['side'], $s, $r, $wave['hero']['nr'] % 10);
        }
        $stats['i'] += $st[0];
        $stats['c'] += $st[1];
        $stats['b'] *= 1 + $wave['hero'][($wave['side'] . 'Bonus')] * 0.002;
    }

    private function hero_str4($wave, $s, $r, $str_add)
    {
        $str = isset($wave['hero']['total_power']) ? $wave['hero']['total_power'] : (100 + $s * ($r ? 80 : 100) + $str_add);
        if ($wave['side'] == 'off') {
            if (!isset($wave['hero']['isCavalry'])) {
                //trigger_error("isCavalry is not defined in hero", E_USER_WARNING);
            }
            $stats = [0, 0];
            $stats[isset($wave['hero']['isCavalry']) && $wave['hero']['isCavalry'] ? 1 : 0] += $str;
            return $stats;
        }
        return [$str, $str];
    }

    private function hero_str3($side, $s, $r, $u)
    {
        if ($side == 'off') {
            $atk = $this->off[$r][$u];
            $stats = [0, 0];
            $type = isset($this->is_cavalary[$r][$u]) ? 1 : 0;
            $stats[$type] += round5((2 * $atk / 3 + 27.5) * $s + 5 * $atk / 4);
            return $stats;
        }
        $di = $this->def_i[$r][$u];
        $dc = $this->def_c[$r][$u];
        $corr = pow($di / $dc, 0.2);
        return [
            round5((2 * $di / 3 + 27.5 * $corr) * $s + 5 * $di / 3),
            round5((2 * $dc / 3 + 27.5 / $corr) * $s + 5 * $dc / 3),
        ];
    }

    private function finalize_stats(&$stats)
    {
        $stats['i'] *= $stats['b'];
        $stats['c'] *= $stats['b'];
        $stats['t'] = $stats['i'] + $stats['c'];
    }

    private function calc_total_defense(&$def_armies)
    {
        $defense = ['i' => 0, 'c' => 0, 'b' => 1];
        foreach ($def_armies as $idx => &$army) {
            $this->calc_defense($army, $defense);
        }
        return $defense;
    }

    private function calc_defense(&$wave, &$defense)
    {
        $def = ['i' => 0, 'c' => 0, 'b' => 1];
        $item_bonus = $this->item_unit_bonus($wave);
        $this->unit_defense($wave, $item_bonus, $def);
        if (!empty($wave['u'][10])) {
            $this->hero_boni($wave, $def);
        }
        if (isset($wave['P'])) {
            $def['b'] *= 1.1;
        }
        $defense['i'] += $def['i'] * $def['b'];
        $defense['c'] += $def['c'] * $def['b'];
    }

    private function unit_defense($wave, $item_bonus, &$def)
    {
        $r = $this->int_check_limit($wave, 'r', 0, 7);
        for ($u = 0; $u < 10; $u++) {
            $up_level = ($r <= 2 and $u <= 8) ? $wave['U'][$u] : 0;
            $cu = $this->upkeep[$r][$u];
            $def['i'] += $wave['u'][$u] * ($this->stat_with_upg(
                $this->def_i[$r][$u],
                $cu,
                $up_level
            ) + $item_bonus[$u]);
            $def['c'] += $wave['u'][$u] * ($this->stat_with_upg(
                $this->def_c[$r][$u],
                $cu,
                $up_level
            ) + $item_bonus[$u]);
        }
    }

    private function calc_diffusion($troops_amount)
    {
        $n = 2 * round(1.8592 - pow($troops_amount, 0.015), 4);
        return $this->limit(1.2578, $n, 1.5);
    }

    private function remorale($off, $def, $pop, $wall)
    {
        $pts = round($off) / round($def * $wall);
        $morale = round(pow($pop, -0.2 * min($pts, 1)), 3);
        return $pts * $this->limit(0.667, $morale, 1.0);
    }

    private function lone_dies($offense, $pop_ratio)
    {
        return round($offense['t'] * $this->common_morale($pop_ratio)) <= 84;
    }

    private function sigma($x)
    {
        return $x >= 1 ? 1 - 0.5 / $x : 0.5 * $x;
    }

    private function early_ramming($lvl, $units, $percent, $upg_lvl, $durability, $race_dur)
    {
        if ($durability != 1) {
            $units = floor($units / $durability);
        } // crazy stone
        $points = $units * $this->bonusCatsRams($upg_lvl) * 4 * $percent - 0.5;
        $lvl2 = floor($lvl / 2);
        $pt = [0];
        for ($i = 1; $i <= $lvl2; $i++) {
            $pt[$i] = $pt[$i - 1] + 3 + $lvl * 2 - $i * 4;
        }
        $pt[(int) $lvl2 + 1] = $pt[(int) $lvl2] + 20 + $lvl - 2 * $lvl2;
        $delta = 51;
        for ($i = $lvl2 + 2; $i <= $lvl; $i++) {
            $pt[(int) $i] = $pt[(int) $i - 1] + $delta;
            $delta += 2.5;
        }
        for ($i = 1; $i <= $lvl; $i++) {
            $pt[$i] = floor($pt[$i] * $race_dur);
        }
        $pt[] = 1E99; // some very large number
        $idx = 1;
        while ($points >= $pt[$idx]) {
            $idx++;
        }
        return $lvl - $idx + 1;
    }

    private function bonusCatsRams($lvl)
    {
        return round(2 * pow(1.0205, $lvl), 2) / 2;
    }

    private function demolish($lvl, $units, $upg_lvl, $race_durab, $durability_other)
    {
        if ($durability_other != 1) {
            $units = floor($units / $durability_other);
        }
        $units *= $this->bonusCatsRams($upg_lvl);
        $effective_number = (8 * $units - 1) / $race_durab;
        if ($effective_number <= 0) {
            return $lvl;
        } else if ($effective_number > $lvl * ($lvl + 1)) {
            return 0;
        } else {
            return round(sqrt(pow($lvl + 0.5, 2) - $effective_number));
        }
    }
}
$simulator = new Simulatorss;
*/
class Simulatorsss
{
    public function procSim($post) {
        global $form;
        // Recivimos el formulario y procesamos
        if(isset($post['attackertribe']) && isset($post['defendertribe'])) {
            $enforcestribes = array();
            for($i=1;$i<=5;$i++) { if(isset($post['reinf_'.$i])) { array_push($enforcestribes,$i);}}
            $participantstribes = array();
            for($i=1;$i<=5;$i++) { if(isset($post['parti_'.$i])) { array_push($participantstribes,$i);}}
            $_POST['enforcestribes'] = $enforcestribes;
            $post['enforcestribes'] = $enforcestribes;
            $_POST['participantstribes'] = $participantstribes;
            $post['participantstribes'] = $participantstribes;
            //var_dump($post);
            $_POST['result'] = $this->simulate($post);
            $post['result'] = $_POST['result'];
            $form->valuearray = $post;
        }
    }
    private function simulate($post) {
        $Enforces = array();
        $Participants = array();
        $Attacker['attackdata']['attack_type'] = $post['attack_type'];
        $Attacker['uid'] = 0;
        $Attacker['tribe'] = $post['attackertribe'];
        $Attacker['inhabitants'] = max(1,isset($post['a_inh'])?$post['a_inh']:0);
        $start = ($Attacker['tribe']-1)*10+1;
        $end = ($Attacker['tribe'])*10;
        for($i=$start;$i<=$end;$i++){
            $Attacker['u'.$i] = isset($post['au_'.$i])?$post['au_'.$i]:0;
            $Attacker['smithy']['b'.($i-$start+1)] = isset($post['ab_'.($i-$start+1)])?$post['ab_'.($i-$start+1)]:0;
        }
        $Attacker['hero']['itemfs'] = isset($post['a_h_fs'])?$post['a_h_fs']:0;
        $Attacker['hero']['offBonus'] = isset($post['a_h_ob'])?$post['a_h_ob']:0;
        $participantsCount = count($post['participantstribes']);
        for($pc=0;$pc<$participantsCount;$pc++){
            $Participants[$pc]['tribe'] = $post['participantstribes'][$pc];
            $start = ($Participants[$pc]['tribe']-1)*10+1;
            $end = ($Participants[$pc]['tribe'])*10;
            for($i=$start;$i<=$end;$i++){
                $Participants[$pc]['u'.$i] = $post['pu_'.$i];
                $Participants[$pc]['smithy']['b'.($i-$start+1)] = $post['pb_'.($i-$start+1)];
            }
        }
        $Defender['uid'] = 0;
        $Defender['tribe'] = $post['defendertribe'];
        $Defender['inhabitants'] = max(1,isset($post['d_inh'])?$post['d_inh']:0);
        $start = ($Defender['tribe']-1)*10+1;
        $end = ($Defender['tribe'])*10;
        for($i=$start;$i<=$end;$i++){
            $Defender['u'.$i] = isset($post['du_'.$i])?$post['du_'.$i]:0;
            $Defender['smithy']['a'.($i-$start+1)] = isset($post['da_'.($i-$start+1)])?$post['da_'.($i-$start+1)]:0;
        }
        $Defender['hero']['itemfs'] = isset($post['d_h_fs'])?$post['d_h_fs']:0;
        $Defender['hero']['defBonus'] = isset($post['d_h_db'])?$post['d_h_db']:0;
        $enforcesCount = count($post['enforcestribes']);
        for($ec=0;$ec<$enforcesCount;$ec++){
            $Enforces[$ec]['tribe'] = $post['enforcestribes'][$ec];
            $start = ($Enforces[$ec]['tribe']-1)*10+1;
            $end = ($Enforces[$ec]['tribe'])*10;
            for($i=$start;$i<=$end;$i++){
                $Enforces[$ec]['u'.$i] = $post['eu_'.$i];
                $Enforces[$ec]['smithy']['a'.($i-$start+1)] = $post['ea_'.($i-$start+1)];
            }
            $Enforces[$ec]['hero']['itemfs'] = $post['e_h_fs'.$Enforces[$ec]['tribe']];
            $Enforces[$ec]['hero']['defBonus'] = $post['e_h_db'.$Enforces[$ec]['tribe']];
        }
        $Defender['buildings']['f40'] = isset($post['wall'])?$post['wall']:0;
        switch ($Defender['tribe']){
            case 1: $Defender['buildings']['f40t'] = 31; break;
            case 2: case 5: $Defender['buildings']['f40t'] = 32; break;
            case 3: $Defender['buildings']['f40t'] = 33; break;
        }
        $Defender['buildings']['f19'] = isset($post['stonemason'])?$post['stonemason']:0;
        $Defender['buildings']['f19t'] = 34;

        $Attacker['attackdata']['ctar1'] = 15;
        $Attacker['attackdata']['ctar2'] = 255;
        $Defender['buildings']['f20'] = isset($post['ctar1'])?$post['ctar1']:0;
        $Defender['buildings']['f20t'] = 15;



        if(!isset($post['kata']) || $post['kata'] == "") {
            $post['kata'] = 0;
        }

        // check scout

        $scout = 1;
        for($i=$start;$i<=($start+9);$i++) {
            if($i == 4 || $i == 14 || $i == 23 || $i == 34 || $i == 44)
            {}
            else{
                if($Attacker['u'.$i]>0) {
                    $scout = 0;
                    break;
                }
            }
        }

        return $this->calculateBattle($Attacker,$Defender,$Enforces,$Participants);

    }


    //1 raid 0 normal
    function calculateBattle($Attacker,$Defender,$Enforces,$Participants = null) {
        global $bid34,$database;
        // Definieer de array met de eenheden
        $cavalryArray = array(4,5,6,15,16,23,24,25,26,35,36,45,46);
        $catapultArray = array(8,18,28,38,48);
        $ramArray = array(7,17,27,37,47);
        $spyarray = array(4,14,23,34,44);
        $catpCount = $ramCount = 0;

        // Array om terug te keren met het resultaat van de berekening
        $result = array();
        $involve = 0;
        $winner = false;
        // bij 0 alle deelresultaten
        $cavalryAP = $infantryAP = $infantryDP = $cavalryDP = $totalAP = $totalDP = 0;

        //
        // Berekenen het totaal aantal punten van Aanvaller
        //
        //var_dump($Attacker['attackdata']['attack_type']);die();
        if ($Attacker['attackdata']['attack_type'] == 4 && $Defender['tribe']==3 && isset($Defender['u199']) && $Defender['u199']>0){
            $trapCount = $Defender['u199'];
            $trappedCount = 0;
            $tribe = $Attacker['tribe']; $start = ($tribe-1)*10 + 1; $end = $tribe*10; $marr = array(); $trapped = array();
            for($i=$start;$i<=$end;$i++) {$marr['u'.$i] = $Attacker['u'.$i];$trapped['u'.$i] = 0;}
         
            $xxx=0;
            $spd=SPEED*1000;
             $spd1=SPEED/100;
           
           $i=0;
             do{
              $max = max($marr); $key = array_search($max,$marr);
                if ($marr[$key]>20000 && $trapCount>20000 ){
                    $Attacker[$key] = $Attacker[$key] - 20000;
                    $marr[$key] = $marr[$key] - 20000;
                    $trapCount = $trapCount - 20000;
                    $trapped[$key] = $trapped[$key] + 20000;
                    $trappedCount = $trappedCount + 20000;
                    $xxx++;
                  continue;
                }
                if ($marr[$key]>1000 && $trapCount>1000 ){
                    $Attacker[$key] = $Attacker[$key] - 1000;
                    $marr[$key] = $marr[$key] - 1000;
                    $trapCount = $trapCount - 1000;
                    $trapped[$key] = $trapped[$key] + 1000;
                    $trappedCount = $trappedCount + 1000;
                    $xxx++;
                  continue;
                }
               if ($marr[$key]>0){
                    $Attacker[$key] = $Attacker[$key] - 1;
                    $marr[$key] = $marr[$key] - 1;
                    $trapCount = $trapCount - 1;
                    $trapped[$key] = $trapped[$key] + 1;
                    $trappedCount = $trappedCount + 1;
                    $xxx++;
                }
             }while($max>0 && $trapCount>0);
         // echo $i;
           // die(var_dump($trapCount));
           /* if ($trapCount>0 && isset($Attacker['hero']) && !empty($Attacker['hero'])){
                $trapCount = $trapCount - 1;
                $trapped['hero'] = $Attacker['hero'];
                $Attacker['hero'] = null;
                $trappedCount = $trappedCount + 1;
            }*/
            $result['trap']['trapcount'] = $Defender['u199'];
            $result['trap']['trapped'] = $trapped;
            $result['trap']['trappedcount'] = $trappedCount;
        }
        $result['had']['attacker']['attackdata'] = $Attacker['attackdata'];
        $result['had']['attacker']['uid'] = $Attacker['uid'];
        $result['had']['attacker']['tribe'] = $Attacker['tribe'];
        $result['had']['attacker']['alliance'] = $Attacker['alliance'];
        $result['had']['attacker']['inhabitants'] = $Attacker['inhabitants'];
        $result['had']['attacker']['villagearties'] = $Attacker['villagearties'];
        $result['had']['attacker']['accountarties'] = $Attacker['accountarties'];
        $result['had']['defender']['uid'] = $Defender['uid'];
        $result['had']['defender']['tribe'] = $Defender['tribe'];
        $result['had']['defender']['alliance'] = $Defender['alliance'];
        $result['had']['defender']['isoasis'] = $Defender['isoasis'];
        $result['had']['defender']['res_array'] = $Defender['res_array'];
        $result['had']['defender']['buildings'] = $Defender['buildings'];
        $result['had']['defender']['inhabitants'] = $Defender['inhabitants'];
        $result['had']['defender']['villagearties'] = $Defender['villagearties'];
        $result['had']['defender']['tocapturearties'] = $Defender['tocapturearties'];
        $result['had']['defender']['accountarties'] = $Defender['accountarties'];
        $result['chief']['hadloyalty'] = $Defender['loyalty'];
        $result['chief']['iscapital'] = $Defender['iscapital'];
        $result['had']['defender']['count'] = 0;
        $result['had']['defender']['pop'] = 0;
        $result['had']['attacker']['count'] = 0;
        $result['had']['attacker']['pop'] = 0;
        $enforcesCount = count($Enforces);
        $tmpAAP = 1;
        for($i=1;$i<=50;$i++){
            $result['had']['defender']['u'.$i] = 0;
            $result['had']['attacker']['u'.$i] = 0;
            for($ec=1;$ec<$enforcesCount;$ec++){
                $result['had']['enforces'][$ec]['u'.$i] = 0;
                $result['had']['enforces'][$ec]['count'] = 0;
                $result['had']['enforces'][$ec]['pop'] = 0;
            }
            $result['had']['defender']['overall']['u'.$i] = 0;
            $result['had']['defender']['overall']['count'] = 0;
            $result['had']['defender']['overall']['pop'] = 0;
            $result['had']['attacker']['overall']['u'.$i] = 0;
            $result['had']['attacker']['overall']['count'] = 0;
            $result['had']['attacker']['overall']['pop'] = 0;
            for ($j=0;$j<=5;$j++){
                $result['had']['defender']['tribedoverall'][$j]['u'.$i] = 0;
                $result['had']['defender']['tribedoverall'][$j]['count'] = 0;
                $result['had']['defender']['tribedoverall'][$j]['pop'] = 0;
                $result['had']['attacker']['tribedoverall'][$j]['u'.$i] = 0;
                $result['had']['attacker']['tribedoverall'][$j]['count'] = 0;
                $result['had']['attacker']['tribedoverall'][$j]['pop'] = 0;
            }
        }
        if($Attacker['attackdata']['attack_type'] == 1){
            switch ($Attacker['tribe']){
                case 1: $y = 4; $addInf = false; break;
                case 2: $y = 14; $addInf = true; break;
                case 3: $y = 23; $addInf = false; break;
                case 4: $y = 34; $addInf = false; break;
                case 5: $y = 44; $addInf = false; break;
            }
            $tribe = $Attacker['tribe'];
            $start = ($tribe-1)*10 + 1;
            $end = $tribe*10;
            if ($Attacker['u'.$y]>0){
                global ${'u'.$y};
                if ($addInf) {
                    if ($Attacker['smithy']['b'.($y-$start+1)]){
                        $infantryAP +=  (20 + (20 + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $Attacker['smithy']['b'.($y-$start+1)]))) * $Attacker['u'.$y];
                    } else {
                        $infantryAP +=  20 * $Attacker['u'.$y];
                    }
                } else {
                    if ($Attacker['smithy']['b'.($y-$start+1)]){
                        $cavalryAP +=  (20 + (20 + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $Attacker['smithy']['b'.($y-$start+1)]))) * $Attacker['u'.$y];
                    } else {
                        $cavalryAP +=  20 * $Attacker['u'.$y];
                    }
                }
                $involve += $Attacker['u'.$y];
            }
            switch ($Defender['tribe']){
                case 1: $y = 4; break;
                case 2: $y = 14; break;
                case 3: $y = 23; break;
                case 4: $y = 34; break;
                case 5: $y = 44; break;
            }
            $tribe = $Defender['tribe'];
            $start = ($tribe-1)*10 + 1;
            $end = $tribe*10;
            if ($Defender['u'.$y]>0){
                global ${'u'.$y};
                if ($Defender['smithy']['a'.($y-$start+1)]) {
                    $infantryDP +=  (${'u'.$y}['di'] + (${'u'.$y}['di'] + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $Defender['smithy']['a'.($y-$start+1)]))) * $Defender['u'.$y];
                    $cavalryDP += (${'u'.$y}['dc'] + (${'u'.$y}['dc'] + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $Defender['smithy']['a'.($y-$start+1)]))) * $Defender['u'.$y];
                } else {
                    $infantryDP += (${'u'.$y}['di']) * $Defender['u'.$y];
                    $cavalryDP += (${'u'.$y}['dc']) * $Defender['u'.$y];
                }
                $involve += $Defender['u'.$y];
            }
            if (isset($Enforces) && count($Enforces)>0){
                $enforcesCount = count($Enforces);
                for($ec=0;$ec<$enforcesCount;$ec++){
                    $enforce = $Enforces[$ec];
                    $tribe = $enforce['tribe'];
                    $start = ($tribe-1)*10 + 1;
                    $end = $tribe*10;
                    switch ($enforce['tribe']){
                        case 1: $y = 4; $addInf = false; break;
                        case 2: $y = 14; $addInf = true; break;
                        case 3: $y = 23; $addInf = false; break;
                        case 4: $y = 34; $addInf = false; break;
                        case 5: $y = 44; $addInf = false; break;
                    }
                    if ($enforce['u'.$y]>0){
                        global ${'u'.$y};
                        if($enforce['smithy']['a'.($y-$start+1)]){
                            $infantryDP +=  (${'u'.$y}['di'] + (${'u'.$y}['di'] + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $enforce['smithy']['a'.($y-$start+1)]))) * $enforce['u'.$y];
                            $cavalryDP += (${'u'.$y}['dc'] + (${'u'.$y}['dc'] + 300 * ${'u'.$y}['pop'] / 7) * (pow(1.007, $enforce['smithy']['a'.($y-$start+1)]))) * $enforce['u'.$y];
                        } else {
                            $infantryDP += (${'u'.$y}['di']) * $enforce['u'.$y];
                            $cavalryDP += (${'u'.$y}['dc']) * $enforce['u'.$y];
                        }
                        $involve += $enforce['u'.$y];
                    }
                }
            }
        }
        //else
        {
            $tribe = $Attacker['tribe'];
            $start = ($tribe-1)*10 + 1;
            $end = $tribe*10;
            for($i=$start;$i<=$end;$i++) {
                if ($Attacker['u'.$i]>0){
                    global ${'u'.$i};
                    if($Attacker['attackdata']['attack_type'] != 1){
                        if(in_array($i,$cavalryArray)) {
                            if($Attacker['smithy']['b'.($i-$start+1)]){
                                $cavalryAP += (${'u'.$i}['atk'] + (${'u'.$i}['atk'] + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $Attacker['smithy']['b'.($i-$start+1)]))) * $Attacker['u'.$i];
                            } else {
                                $cavalryAP += (${'u'.$i}['atk']) * $Attacker['u'.$i];
                            }
                        } else {
                            if($Attacker['smithy']['b'.($i-$start+1)]){
                                $infantryAP += (${'u'.$i}['atk'] + (${'u'.$i}['atk'] + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $Attacker['smithy']['b'.($i-$start+1)]))) * $Attacker['u'.$i];
                            } else {
                                $infantryAP += (${'u'.$i}['atk']) * $Attacker['u'.$i];
                            }
                        }
                        // Punten van de catavult van de aanvaller
                        if(in_array($i,$catapultArray)) {
                            $catpCount += $Attacker['u'.$i];
                        }
                        // Punten van de Rammen van de aanvaller
                        if(in_array($i,$ramArray)) {
                            $ramCount += $Attacker['u'.$i];
                        }
                        $involve += $Attacker['u'.$i];
                    }
                    $result['had']['attacker']['u'.$i] += $Attacker['u'.$i];
                    $result['had']['attacker']['count'] += $Attacker['u'.$i];
                    $result['had']['attacker']['pop'] += $Attacker['u'.$i]* ${'u'.$i}['pop'];
                    $result['had']['attacker']['tribedoverall'][$Attacker['tribe']]['u'.$i] += $Attacker['u'.$i];
                    $result['had']['attacker']['tribedoverall'][$Attacker['tribe']]['count'] += $Attacker['u'.$i];
                    $result['had']['attacker']['tribedoverall'][$Attacker['tribe']]['pop'] += $Attacker['u'.$i]* ${'u'.$i}['pop'];
                    $result['had']['attacker']['overall']['u'.$i] += $Attacker['u'.$i];
                    $result['had']['attacker']['overall']['count'] += $Attacker['u'.$i];
                    $result['had']['attacker']['overall']['pop'] += $Attacker['u'.$i]* ${'u'.$i}['pop'];
                }
            }
            $tribe = $Defender['tribe'];
            $start = ($tribe-1)*10 + 1;
            $end = $tribe*10;
            for($i=$start;$i<=$end;$i++) {
                if (isset($Defender['u'.$i]) && $Defender['u'.$i]>0){
                    global ${'u'.$i};
                    if($Attacker['attackdata']['attack_type'] != 1){
                        if(!isset($Defender['smithy']['a'.($i-$start+1)])) $Defender['smithy']['a'.($i-$start+1)] = 0;
                        if($Defender['smithy']['a'.($i-$start+1)]){
                            $infantryDP +=  (${'u'.$i}['di'] + (${'u'.$i}['di'] + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $Defender['smithy']['a'.($i-$start+1)]))) * $Defender['u'.$i];
                            $cavalryDP += (${'u'.$i}['dc'] + (${'u'.$i}['dc'] + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $Defender['smithy']['a'.($i-$start+1)]))) * $Defender['u'.$i];
                        } else {
                            $infantryDP += (${'u'.$i}['di']) * $Defender['u'.$i];
                            $cavalryDP += (${'u'.$i}['dc']) * $Defender['u'.$i];
                        }
                        $involve += $Defender['u'.$i];
                    }
                    $result['had']['defender']['u'.$i] += $Defender['u'.$i];
                    $result['had']['defender']['count'] += $Defender['u'.$i];
                    $result['had']['defender']['pop'] += $Defender['u'.$i]* ${'u'.$i}['pop'];
                    $result['had']['defender']['tribedoverall'][0]['u'.$i] += $Defender['u'.$i];
                    $result['had']['defender']['tribedoverall'][0]['count'] += $Defender['u'.$i];
                    $result['had']['defender']['tribedoverall'][0]['pop'] += $Defender['u'.$i]* ${'u'.$i}['pop'];
                    $result['had']['defender']['overall']['u'.$i] += $Defender['u'.$i];
                    $result['had']['defender']['overall']['count'] += $Defender['u'.$i];
                    $result['had']['defender']['overall']['pop'] += $Defender['u'.$i]* ${'u'.$i}['pop'];
                }
            }

            if (isset($Enforces) && count($Enforces)>0){
                $enforcesCount = count($Enforces);
                for($ec=0;$ec<$enforcesCount;$ec++){
                    $enforce = $Enforces[$ec];
                    $tribe = $enforce['tribe'];
                    $start = ($tribe-1)*10 + 1;
                    $end = $tribe*10;
                    $result['had']['enforces'][$ec]['id'] = $enforce['id'];
                    $result['had']['enforces'][$ec]['from'] = $enforce['from'];
                    $result['had']['enforces'][$ec]['vref'] = $enforce['vref'];
                    $result['had']['enforces'][$ec]['uid'] = $enforce['uid'];
                    $result['had']['enforces'][$ec]['tribe'] = $enforce['tribe'];
                    $result['had']['enforces'][$ec]['alliance'] = $enforce['alliance'];
                    for($i=$start;$i<=$end;$i++) {
                        if ($enforce['u'.$i]>0){
                            global ${'u'.$i};
                            if($Attacker['attackdata']['attack_type'] != 1){
                                if ($enforce['smithy']['a'.($i-$start+1)]) {
                                    $infantryDP +=  (${'u'.$i}['di'] + (${'u'.$i}['di'] + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $enforce['smithy']['a'.($i-$start+1)]))) * $enforce['u'.$i];
                                    $cavalryDP += (${'u'.$i}['dc'] + (${'u'.$i}['dc'] + 300 * ${'u'.$i}['pop'] / 7) * (pow(1.007, $enforce['smithy']['a'.($i-$start+1)]))) * $enforce['u'.$i];
                                } else {
                                    $infantryDP += (${'u'.$i}['di']) * $enforce['u'.$i];
                                    $cavalryDP += (${'u'.$i}['dc']) * $enforce['u'.$i];
                                }
                                $involve += $enforce['u'.$i];
                            }

                            if(!isset($result['had']['enforces'][$ec]['u'.$i])){$result['had']['enforces'][$ec]['u'.$i]=0;}
                            $result['had']['enforces'][$ec]['u'.$i] += $enforce['u'.$i];
                            //if(isset($result['had']['enforces'][$ec]['u'.$i])&& $result['had']['enforces'][$ec]['u'.$i]>0)throw new Exception(__FILE__." $ec: $i: ". ($result['had']['enforces'][$ec]['u'.$i]));
                            if(!isset($result['had']['enforces'][$ec]['count'])){$result['had']['enforces'][$ec]['count']=0;}
                            $result['had']['enforces'][$ec]['count'] += $enforce['u'.$i];
                            if(!isset($result['had']['enforces'][$ec]['pop'])){$result['had']['enforces'][$ec]['pop']=0;}
                            $result['had']['enforces'][$ec]['pop'] += $enforce['u'.$i]* ${'u'.$i}['pop'];
                            $result['had']['defender']['tribedoverall'][$enforce['tribe']]['u'.$i] += $enforce['u'.$i];
                            $result['had']['defender']['tribedoverall'][$enforce['tribe']]['count'] += $enforce['u'.$i];
                            $result['had']['defender']['tribedoverall'][$enforce['tribe']]['pop'] += $enforce['u'.$i]* ${'u'.$i}['pop'];
                            $result['had']['defender']['overall']['u'.$i] += $enforce['u'.$i];
                            $result['had']['defender']['overall']['count'] += $enforce['u'.$i];
                            $result['had']['defender']['overall']['pop'] += $enforce['u'.$i]* ${'u'.$i}['pop'];
                        }
                    }
                }
            }
        }

        $attackHeroBonus = $defenseHeroBonus = 0;
        if($Attacker['hero']) {
            $result['had']['attacker']['hero'] = $Attacker['hero'];
            $result['had']['attacker']['count'] += 1;
            $result['had']['attacker']['pop'] += 6;
            $result['had']['attacker']['tribedoverall'][$Attacker['tribe']]['hero'][] = $Attacker['hero'];
            $result['had']['attacker']['tribedoverall'][$Attacker['tribe']]['count'] += 1;
            $result['had']['attacker']['tribedoverall'][$Attacker['tribe']]['pop'] += 6;
            $result['had']['attacker']['overall']['hero'][] = $Attacker['hero'];
            $result['had']['attacker']['overall']['count'] += 1;
            $result['had']['attacker']['overall']['pop'] += 6;
            if($Attacker['attackdata']['attack_type'] != 1){
                $involve += 1;
                $atkheroface = $Attacker['heroface'];
                $atkhero = $Attacker['hero'];

                if($atkhero['power'] == 0){
                    $atkhero['power'] = 1;
                }

                if ($atkheroface['horse'] != 0) {
                    $cavalryAP += ($atkhero['power']+$atkhero['fsperpoint']+$atkhero['itemfs'])*2/4;
                    $infantryAP += ($atkhero['power']+$atkhero['fsperpoint']+$atkhero['itemfs'])/4;
                } else {
                    $cavalryAP += ($atkhero['power']+$atkhero['fsperpoint']+$atkhero['itemfs'])/4;
                    $infantryAP += ($atkhero['power']+$atkhero['fsperpoint']+$atkhero['itemfs'])*2/4;// + ($atkhero['power']*$atkhero['fsperpoint'] + 300 * 6 / 7) * (pow(1.007, $atkhero['offBonus']) - 1);
                }
                $attackHeroBonus += $atkhero['offBonus']*0.2;
                if ($atkheroface['rightHand'] != 0) {
                    $rightHand = 0;
                    switch ($rightHand){
                        case 16: $addP=3; case 17: $addP=4; case 18: $addP=5; $uindex = 'u1'; $addtoinf = true; break;
                        case 19: $addP=3; case 20: $addP=4; case 21: $addP=5; $uindex = 'u2'; $addtoinf = true; break;
                        case 22: $addP=3; case 23: $addP=4; case 24: $addP=5; $uindex = 'u3'; $addtoinf = true; break;
                        case 25: $addP=6; case 26: $addP=7; case 27: $addP=8; $uindex = 'u5'; $addtoinf = false; break;
                        case 28: $addP=6; case 29: $addP=7; case 30: $addP=8; $uindex = 'u6'; $addtoinf = false; break;
                        case 31: $addP=3; case 32: $addP=4; case 33: $addP=5; $uindex = 'u21'; $addtoinf = true; break;
                        case 34: $addP=3; case 35: $addP=4; case 36: $addP=5; $uindex = 'u22'; $addtoinf = true; break;
                        case 37: $addP=6; case 38: $addP=7; case 39: $addP=8; $uindex = 'u24'; $addtoinf = false; break;
                        case 40: $addP=6; case 41: $addP=7; case 42: $addP=8; $uindex = 'u25'; $addtoinf = false; break;
                        case 43: $addP=6; case 44: $addP=7; case 45: $addP=8; $uindex = 'u26'; $addtoinf = false; break;
                        case 46: $addP=3; case 47: $addP=4; case 48: $addP=5; $uindex = 'u11'; $addtoinf = true; break;
                        case 49: $addP=3; case 50: $addP=4; case 51: $addP=5; $uindex = 'u12'; $addtoinf = true; break;
                        case 52: $addP=3; case 53: $addP=4; case 54: $addP=5; $uindex = 'u13'; $addtoinf = true; break;
                        case 55: $addP=6; case 56: $addP=7; case 57: $addP=8; $uindex = 'u15'; $addtoinf = false; break;
                        case 58: $addP=6; case 59: $addP=7; case 60: $addP=8; $uindex = 'u16'; $addtoinf = false; break;
                    }
                    if (isset($uindex) && isset($result['had']['attacker']['overall'][$uindex])){
                        if ($addtoinf) {
                            $infantryAP += $result['had']['attacker']['overall'][$uindex]*$addP;
                        } else {
                            $cavalryAP += $result['had']['attacker']['overall'][$uindex]*$addP;
                        }
                    }
                }else{
                    if($atkhero['power'] > 50){
                        $heropow = $atkhero['power'] / 3;
                    }else{
                        $heropow = $atkhero['power'];
                    }
                    $infantryAP += sqrt($heropow);
                }

            }
        }

        if(isset($Defender['hero'])) {
            $result['had']['defender']['hero'] = $Defender['hero'];
            $result['had']['defender']['count'] += 1;
            $result['had']['defender']['pop'] += 6;
            $result['had']['defender']['tribedoverall'][0]['hero'][] = $Defender['hero'];
            $result['had']['defender']['tribedoverall'][0]['count'] += 1;
            $result['had']['defender']['tribedoverall'][0]['pop'] += 6;
            $result['had']['defender']['overall']['hero'][] = $Defender['hero'];
            $result['had']['defender']['overall']['count'] += 1;
            $result['had']['defender']['overall']['pop'] += 6;
            if($Attacker['attackdata']['attack_type'] != 1){
                $involve += 1;
                $defhero = $Defender['hero'];
                $defheroface = $Defender['heroface'];
                if ($defheroface['horse'] != 0) {
                    $cavalryDP += ($defhero['power']*$defhero['fsperpoint']+$defhero['itemfs'])*2/3;
                    $infantryDP += ($defhero['power']*$defhero['fsperpoint']+$defhero['itemfs'])/3;
                } else {
                    $cavalryDP += ($defhero['power']*$defhero['fsperpoint']+$defhero['itemfs'])/3;
                    $infantryDP += ($defhero['power']*$defhero['fsperpoint']+$defhero['itemfs'])*2/3;
                }
                $defenseHeroBonus += ($defhero['defBonus']*0.002);
                if ($defheroface['rightHand'] != 0) {
                    $rightHand = 0;
                    switch ($rightHand){
                        case 16: $addP=3; case 17: $addP=4; case 18: $addP=5; $uindex = 'u1'; $addtoinf = true; break;
                        case 19: $addP=3; case 20: $addP=4; case 21: $addP=5; $uindex = 'u2'; $addtoinf = true; break;
                        case 22: $addP=3; case 23: $addP=4; case 24: $addP=5; $uindex = 'u3'; $addtoinf = true; break;
                        case 25: $addP=6; case 26: $addP=7; case 27: $addP=8; $uindex = 'u5'; $addtoinf = false; break;
                        case 28: $addP=6; case 29: $addP=7; case 30: $addP=8; $uindex = 'u6'; $addtoinf = false; break;
                        case 31: $addP=3; case 32: $addP=4; case 33: $addP=5; $uindex = 'u21'; $addtoinf = true; break;
                        case 34: $addP=3; case 35: $addP=4; case 36: $addP=5; $uindex = 'u22'; $addtoinf = true; break;
                        case 37: $addP=6; case 38: $addP=7; case 39: $addP=8; $uindex = 'u24'; $addtoinf = false; break;
                        case 40: $addP=6; case 41: $addP=7; case 42: $addP=8; $uindex = 'u25'; $addtoinf = false; break;
                        case 43: $addP=6; case 44: $addP=7; case 45: $addP=8; $uindex = 'u26'; $addtoinf = false; break;
                        case 46: $addP=3; case 47: $addP=4; case 48: $addP=5; $uindex = 'u11'; $addtoinf = true; break;
                        case 49: $addP=3; case 50: $addP=4; case 51: $addP=5; $uindex = 'u12'; $addtoinf = true; break;
                        case 52: $addP=3; case 53: $addP=4; case 54: $addP=5; $uindex = 'u13'; $addtoinf = true; break;
                        case 55: $addP=6; case 56: $addP=7; case 57: $addP=8; $uindex = 'u15'; $addtoinf = false; break;
                        case 58: $addP=6; case 59: $addP=7; case 60: $addP=8; $uindex = 'u16'; $addtoinf = false; break;
                    }
                    if (isset($uindex) && isset($result['had']['defender']['overall'][$uindex])){
                        if ($addtoinf) {
                            $infantryDP += $result['had']['defender']['overall'][$uindex]*$addP;
                        } else {
                            $cavalryDP += $result['had']['defender']['overall'][$uindex]*$addP;
                        }
                    }
                }
            }
        }

        if (isset($Enforces) && count($Enforces)>0){
            $enforcesCount = count($Enforces);
            for($ec=0;$ec<$enforcesCount;$ec++){
                $enforce = $Enforces[$ec];
                if($enforce['hero']) {
                    $result['had']['enforces'][$ec]['hero'] = $enforce['hero'];
                    if(!isset($result['had']['enforces'][$ec]['count'])) $result['had']['enforces'][$ec]['count'] = 0;
                    $result['had']['enforces'][$ec]['count'] += 1;
                    if(!isset($result['had']['enforces'][$ec]['pop'])) $result['had']['enforces'][$ec]['pop'] = 0;
                    $result['had']['enforces'][$ec]['pop'] += 6;
                    $result['had']['defender']['tribedoverall'][$enforce['tribe']]['hero'][] = $enforce['hero'];
                    if(!isset($result['had']['defender']['tribedoverall'][$enforce['tribe']]['count'])) $result['had']['defender']['tribedoverall'][$enforce['tribe']]['count'] = 0;
                    $result['had']['defender']['tribedoverall'][$enforce['tribe']]['count'] += 1;
                    if(!isset($result['had']['defender']['tribedoverall'][$enforce['tribe']]['pop'])) $result['had']['defender']['tribedoverall'][$enforce['tribe']]['pop'] = 0;
                    $result['had']['defender']['tribedoverall'][$enforce['tribe']]['pop'] += 6;
                    $result['had']['defender']['overall']['hero'] = $enforce['hero'];
                    if(!isset($result['had']['defender']['overall']['count'])) $result['had']['defender']['overall']['count'] = 0;
                    $result['had']['defender']['overall']['count'] += 1;
                    if(!isset($result['had']['defender']['overall']['pop'])) $result['had']['defender']['overall']['pop'] = 0;
                    $result['had']['defender']['overall']['pop'] += 6;
                    if($Attacker['attackdata']['attack_type'] != 1){
                        $involve += 1;
                        $enforcehero = $enforce['hero'];
                        $enforceheroface = $enforce['heroface'];
                        if ($enforceheroface['horse'] != 0) {
                            $cavalryDP += ($enforcehero['power']*$enforcehero['fsperpoint']+$enforcehero['itemfs'])*2/3;
                            $infantryDP += ($enforcehero['power']*$enforcehero['fsperpoint']+$enforcehero['itemfs'])/3;
                        } else {
                            $cavalryDP += ($enforcehero['power']*$enforcehero['fsperpoint']+$enforcehero['itemfs'])/3;
                            $infantryDP += ($enforcehero['power']*$enforcehero['fsperpoint']+$enforcehero['itemfs'])*2/3;
                        }
                        $defenseHeroBonus += ($enforcehero['defBonus']*0.002);
                        if ($enforceheroface['rightHand'] != 0) {
                            $rightHand = 0;
                            switch ($rightHand){
                                case 16: $addP=3; case 17: $addP=4; case 18: $addP=5; $uindex = 'u1'; $addtoinf = true; break;
                                case 19: $addP=3; case 20: $addP=4; case 21: $addP=5; $uindex = 'u2'; $addtoinf = true; break;
                                case 22: $addP=3; case 23: $addP=4; case 24: $addP=5; $uindex = 'u3'; $addtoinf = true; break;
                                case 25: $addP=6; case 26: $addP=7; case 27: $addP=8; $uindex = 'u5'; $addtoinf = false; break;
                                case 28: $addP=6; case 29: $addP=7; case 30: $addP=8; $uindex = 'u6'; $addtoinf = false; break;
                                case 31: $addP=3; case 32: $addP=4; case 33: $addP=5; $uindex = 'u21'; $addtoinf = true; break;
                                case 34: $addP=3; case 35: $addP=4; case 36: $addP=5; $uindex = 'u22'; $addtoinf = true; break;
                                case 37: $addP=6; case 38: $addP=7; case 39: $addP=8; $uindex = 'u24'; $addtoinf = false; break;
                                case 40: $addP=6; case 41: $addP=7; case 42: $addP=8; $uindex = 'u25'; $addtoinf = false; break;
                                case 43: $addP=6; case 44: $addP=7; case 45: $addP=8; $uindex = 'u26'; $addtoinf = false; break;
                                case 46: $addP=3; case 47: $addP=4; case 48: $addP=5; $uindex = 'u11'; $addtoinf = true; break;
                                case 49: $addP=3; case 50: $addP=4; case 51: $addP=5; $uindex = 'u12'; $addtoinf = true; break;
                                case 52: $addP=3; case 53: $addP=4; case 54: $addP=5; $uindex = 'u13'; $addtoinf = true; break;
                                case 55: $addP=6; case 56: $addP=7; case 57: $addP=8; $uindex = 'u15'; $addtoinf = false; break;
                                case 58: $addP=6; case 59: $addP=7; case 60: $addP=8; $uindex = 'u16'; $addtoinf = false; break;
                            }
                            if (isset($uindex) && isset($result['had']['defender']['overall'][$uindex])){
                                if ($addtoinf) {
                                    $infantryDP += $result['had']['defender']['overall'][$uindex]*$addP;
                                } else {
                                    $cavalryDP += $result['had']['defender']['overall'][$uindex]*$addP;
                                }
                            }
                        }
                    }
                }
            }
        }

        ////////////////EDIT EDIT EDIT EDIT/////////
        $result['reminders']['defender']['buildings'] = $result['had']['defender']['buildings'];
        /////////////////////////////////////////////
        if (!$Defender['isoasis']){
            $buildarray =  $result['had']['defender']['buildings'];
            $wall = $buildarray['f40'];
            $residence = 0;
            for($i=19;$i<=39;$i++){
                if(($buildarray['f'.$i.'t']==25)||($buildarray['f'.$i.'t']==26)){
                    $residence = $buildarray['f'.$i];
                    break;
                }
            }
        } else {
            $wall = 0;
            $residence = 0;
        }

        // Formule voor de berekening van de bonus verdedigingsmuur "en" Residence ";
        //
        $wallDefBonus = 1;
        $factor = ($Defender['tribe'] == 1)? 1.030 : (($Defender['tribe'] == 2)? 1.020 : 1.025);
        if($wall>0)	$wallDefBonus = pow($factor,$wall);

        // Berekening van de Basic defence bonus "Residence"
        $residenceDefense = 2*(pow($residence,2));

        if ($Attacker['hero']){
            $hero = $Attacker['hero'];
            if ($Defender['tribe'] == 5){
                $attackHeroBonus += $hero['vsnatars']*HEROATTRSPEED + $hero['itemvsnatars']*ITEMATTRSPEED;
            }
        }
        $breweryAttBonus = 1;
        if (isset($Attacker['capbrewery']) && $Attacker['capbrewery']>0) {
            $breweryAttBonus = ($Attacker['capbrewery']+100)/100;
            if ($Attacker['attackdata']['ctar1']!=255) $Attacker['attackdata']['ctar1'] = 0;
            if ($Attacker['attackdata']['ctar2']!=255) $Attacker['attackdata']['ctar2'] = 0;
        }

        $confArteEff = 1; $hasConfArte = false;
        if(isset($Defender['villagearties']) && !empty($Defender['villagearties'])){
            foreach($Defender['villagearties'] as $arte){if($arte['effecttype']==5) {$confArteEff = $arte['effect']; $hasConfArte = true;}}
        }
        if($confArteEff == 1 && isset($Defender['accountarties']) && !empty($Defender['accountarties'])){
            foreach($Defender['accountarties'] as $arte){
                if($arte['effecttype']==5) {
                    $confArteEff = $arte['effect']; $hasConfArte = true; /* if ($arte['aoe']==3) break;*/
                }
            }
        }
        if ($hasConfArte) {
            if ($Attacker['attackdata']['ctar1']!=255) $Attacker['attackdata']['ctar1'] = 0;
            if ($Attacker['attackdata']['ctar2']!=255) $Attacker['attackdata']['ctar2'] = 0;
        }
        $attackHeroBonus /= 100;
        $infantryAP = $infantryAP*($attackHeroBonus + $breweryAttBonus);
        $cavalryAP = $cavalryAP*($attackHeroBonus + $breweryAttBonus);
        $totalAP = $infantryAP+$cavalryAP;

        //
        // Formule voor de berekening van Defensive Punten
        //
        $infantryDP = ($infantryDP+($residenceDefense/2))*($wallDefBonus + $defenseHeroBonus);
        $cavalryDP = ($cavalryDP+($residenceDefense/2))*($wallDefBonus + $defenseHeroBonus);
        if ($totalAP==0) {
            $totalDP = ($infantryDP) + ($cavalryDP) + 10;
        }else{
            $totalDP = ($infantryDP * ($infantryAP/$totalAP)) + ($cavalryDP * ($cavalryAP/$totalAP)) + 10;
        }

$tdeff=0;
$tatt=0;
if($tdeff>time()){
$totalDP=$totalDP*1.25;

}elseif($tatt > time()){
$totalAP=$totalAP*1.25;
}

        //
        // En de Winnaar is....:
        //
        $result['Attack_points'] = $totalAP;
        $result['Defend_points'] = $totalDP;

        $winner = ($totalAP > $totalDP);

        $result['Winner'] = ($winner)? "attacker" : "defender";

        // Formule voor de berekening van de Moraal
        if($Attacker['inhabitants'] > $Defender['inhabitants']) {
            if ($totalAP < $totalDP) {
                $moralbonus = min(1.5, pow($Attacker['inhabitants'] / $Defender['inhabitants'], (0.2*($totalAP/$totalDP))));
            }
            else {
                $moralbonus = min(1.5, pow($Attacker['inhabitants'] / $Defender['inhabitants'], 0.2));
            }
        } else {
            $moralbonus = 1.0;
        }

        if($involve >= 1000) {
            $Mfactor = round(2*(1.8592-pow($involve,0.015)),4);
        } else {
            $Mfactor = 1.5;
        }
        // Formule voor het berekenen verloren drives
        if($Attacker['attackdata']['attack_type'] == 1){
            $defSpyArteEff = 1;
            if(isset($Defender['villagearties']) && !empty($Defender['villagearties'])){
                foreach($Defender['villagearties'] as $arte){if($arte['effecttype']==5) {$defSpyArteEff = $arte['effect'];}}
            }
            if($defSpyArteEff == 1 && isset($Defender['accountarties']) && !empty($Defender['accountarties'])){
                foreach($Defender['accountarties'] as $arte){
                    if($arte['effecttype']==5) {
                        $defSpyArteEff = $arte['effect'];/* if ($arte['aoe']==3) break;*/
                    }
                }
            }
            $attSpyArteEff = 1;
            if(isset($Attacker['villagearties']) && !empty($Attacker['villagearties'])){
                foreach($Attacker['villagearties'] as $arte){if($arte['effecttype']==5) {$attSpyArteEff = $arte['effect'];}}
            }
            if($attSpyArteEff == 1 && isset($Attacker['accountarties']) && !empty($Attacker['accountarties'])){
                foreach($Attacker['accountarties'] as $arte){
                    if($arte['effecttype']==5) {
                        $attSpyArteEff = $arte['effect']; /*if ($arte['aoe']==3) break;*/
                    }
                }
            }
            $totalAP *= $attSpyArteEff;
            $totalDP *= $defSpyArteEff;
            $totalAP = max($totalAP,1);
            $holder = pow((($totalDP*$moralbonus)/$totalAP),$Mfactor);
            $holder = $holder / (1 + $holder);
            // Attacker
            $result[1] = $holder;

            // Defender
            $result[2] = 0;
            $result[1]= max(0,min(1,$result[1]));
            $result[2]= max(0,min(1,$result[2]));
        } elseif($Attacker['attackdata']['attack_type'] == 2){
        } elseif($Attacker['attackdata']['attack_type'] == 3) {
            // Attacker
            $result[1] = ($winner)? pow((($totalDP*$moralbonus)/$totalAP),$Mfactor) : 1;
            $result[1] = round($result[1],8);
            // Defender
            $result[2] = (!$winner)?  pow(($totalAP/($totalDP*$moralbonus)),$Mfactor) : 1;
            $result[2] = round($result[2],8);
            $result[1]= max(0,min(1,$result[1]));
            $result[2]= max(0,min(1,$result[2]));
            // Als aangevallen met "Hero"
            $ku = ($Attacker['tribe']-1)*10+9;
            $kings = $Attacker['u'.$ku];
            $aviables= $kings-round($kings*$result[1]);
            if ($aviables>0){
                switch($aviables){
                    case 1: $fealthy = rand(20,30); break;
                    case 2: $fealthy = rand(40,60); break;
                    case 3: $fealthy = rand(60,80); break;
                    case 4: $fealthy = rand(80,100); break;
                    default: $fealthy = 100; break;
                }
                $result['health'] = $fealthy;
            }
            $ramCount -= round($ramCount*$result[1]);
            //$catpCount -= round($catpCount*$result[1]);
            $ctpMul = pow($totalAP / $totalDP,1.5);
            if($ctpMul > 1) {$ctpMul = 1 - 0.5 / $ctpMul;
            } else {$ctpMul = 0.5 * $ctpMul;}
            $catpCount *= $ctpMul;
        } elseif($Attacker['attackdata']['attack_type'] == 4) {
            $holder = ($winner) ? pow((($totalDP*$moralbonus)/$totalAP),$Mfactor) : pow(($totalAP/($totalDP*$moralbonus)),$Mfactor);
            $holder = $holder / (1 + $holder);
            // Attacker
            $result[1] = $winner ? $holder : 1 - $holder;
            // Defender
            $result[2] = $winner ? 1 - $holder : $holder;
            $result[1]= max(0,min(1,$result[1]));
            $result[2]= max(0,min(1,$result[2]));
            $ramCount -= round($ramCount*$result[1]);
            //$catpCount -= round($catpCount*$result[1]);
            $ctpMul = pow($totalAP / $totalDP,1.5);
            if($ctpMul > 1) {$ctpMul = 1 - 0.5 / $ctpMul;
            } else {$ctpMul = 0.5 * $ctpMul;}
            $catpCount *= $ctpMul;

        }

        if($Attacker['attackdata']['attack_type'] == 3) {
            // Formule voor de berekening van katapulten nodig
            $targetBuilding = array(0=>array('f'=>0,'ft'=>0,'lvl'=>0),
                                    1=>array('f'=>0,'ft'=>0,'lvl'=>0));
            $stonemasonPower = 1;
            $archArtePower = 1;
            if (!$Defender['isoasis']){
                if(isset($Defender['villagearties']) && !empty($Defender['villagearties'])){
                    foreach($Defender['villagearties'] as $arte){if($arte['effecttype']==2) {$archArtePower = $arte['effect'];}}
                }
                if($archArtePower == 1 && isset($Defender['accountarties']) && !empty($Defender['accountarties'])){
                    foreach($Defender['accountarties'] as $arte){
                        if($arte['effecttype']==2) {
                            $archArtePower = $arte['effect']; /*if ($arte['aoe']==3) break;*/
                        }
                    }
                }
                global $bid34;
                $buildarray = $result['had']['defender']['buildings'];

                for($i=19;$i<=39;$i++){
                    if($buildarray['f'.$i.'t']==34){
                        $stonemasonPower = (1 + (isset($bid34[$buildarray['f'.$i]])?$bid34[$buildarray['f'.$i]]['attri']:0));
                        break;
                    }
                }
                $indexArray = range(1,39);
                $indexArray[]=40;

                if ($Attacker['attackdata']['ctar1']>0 && $Attacker['attackdata']['ctar1']!=255){
                    shuffle($indexArray);
                    for($i=0;$i<=39;$i++){
                        if($buildarray['f'.$indexArray[$i].'t']==$Attacker['attackdata']['ctar1'] && $buildarray['f'.$indexArray[$i]]!=0){
                            $targetBuilding[0]['f'] = $indexArray[$i];
                            $targetBuilding[0]['ft'] = $buildarray['f'.$indexArray[$i].'t'];
                            $targetBuilding[0]['lvl'] = $buildarray['f'.$indexArray[$i]];
                            break;
                        }
                    }
                    if($Attacker['attackdata']['ctar1'] == 40&& $buildarray['f99']!=0){
                        //die();
                        //var_dump( $buildarray);
                        $targetBuilding[0]['f'] = $indexArray[$i];
                        $targetBuilding[0]['ft'] = $buildarray['f99t'];
                        $targetBuilding[0]['lvl'] = $buildarray['f99'];
                    }

                    if ($targetBuilding[0]['f']==0) {
                        $targetBuilding[0]['ft'] = $Attacker['attackdata']['ctar1'];
                    }
                } elseif($Attacker['attackdata']['ctar1']==0) {
                    shuffle($indexArray);
                    for($i=0;$i<=39;$i++){
                        if($buildarray['f'.$indexArray[$i].'t']!=0 && $buildarray['f'.$indexArray[$i]]!=0){
                            $targetBuilding[0]['f'] = $indexArray[$i];
                            $targetBuilding[0]['ft'] = $buildarray['f'.$indexArray[$i].'t'];
                            $targetBuilding[0]['lvl'] = $buildarray['f'.$indexArray[$i]];
                            break;
                        }
                    }
                    
                    if(40==$Attacker['attackdata']['ctar1'] && $buildarray['f99']!=0){
                        $targetBuilding[0]['f'] = $indexArray[$i];
                        $targetBuilding[0]['ft'] = $buildarray['f99t'];
                        $targetBuilding[0]['lvl'] = $buildarray['f99'];
                    }
                }
                if ($Attacker['attackdata']['ctar2']>0  && $Attacker['attackdata']['ctar2']!=255){
                    shuffle($indexArray);
                    for($i=0;$i<=39;$i++){
                        if($buildarray['f'.$indexArray[$i].'t']==$Attacker['attackdata']['ctar2'] && $buildarray['f'.$indexArray[$i]]!=0){
                            $targetBuilding[1]['f'] = $indexArray[$i]; $targetBuilding[1]['ft'] = $buildarray['f'.$indexArray[$i].'t'];
                            $targetBuilding[1]['lvl'] = $buildarray['f'.$indexArray[$i]];break;
                        }
                    }
                    if(40==$Attacker['attackdata']['ctar2'] && $buildarray['f99']!=0){
                        $targetBuilding[1]['f'] = $indexArray[$i];
                        $targetBuilding[1]['ft'] = $buildarray['f99t'];
                        $targetBuilding[1]['lvl'] = $buildarray['f99'];
                    }
                    if ($targetBuilding[1]['f']==0) {
                        $targetBuilding[1]['ft'] = $Attacker['attackdata']['ctar2'];
                    }
                } elseif ($Attacker['attackdata']['ctar2']==0) {
                    shuffle($indexArray);
                    for($i=0;$i<=39;$i++){
                        if($buildarray['f'.$indexArray[$i].'t']!=0 && $buildarray['f'.$indexArray[$i]]!=0 && $buildarray['f'.$indexArray[$i]]!=$targetBuilding[0]['f']){
                            $targetBuilding[1]['f'] = $indexArray[$i]; $targetBuilding[1]['ft'] = $buildarray['f'.$indexArray[$i].'t'];
                            $targetBuilding[1]['lvl'] = $buildarray['f'.$indexArray[$i]];break;
                        }
                    }
                }
            }

            $result['had']['defender']['ctar'] = $targetBuilding;
            //var_dump($targetBuilding);die;
            if($catpCount > 0 && ($targetBuilding[0]['f'] != 0 || $targetBuilding[1]['f'] != 0 || $targetBuilding[0]['ft'] != 0 || $targetBuilding[1]['ft'] != 0)) {
                $catapultMoralBonus = min(3,max(1, pow($Attacker['inhabitants'] / $Defender['inhabitants'], 0.3)));
                $wctp = pow(($totalAP/$totalDP),1.5);
                $wctp = ($wctp >= 1)? 1-0.5/$wctp : 0.5*$wctp;
                $wctp *= $catpCount;
                $result[4] = $wctp;
                $result[5] = $catapultMoralBonus;
                $result[6] = $Attacker['smithy']['b8'];
                $catpGrpCnt = 0;
                if ($Attacker['attackdata']['ctar1']!=255) $catpGrpCnt += 1;
                if ($Attacker['attackdata']['ctar2']!=255) $catpGrpCnt += 1;

                if ($Attacker['attackdata']['ctar1']!=255) $catpCount1 = round($catpCount/$catpGrpCnt);
                if ($Attacker['attackdata']['ctar2']!=255) $catpCount2 = round($catpCount/$catpGrpCnt);

                //$catpCount1 = $catpCount2 = 1;

                $destroy[0] = 0;
                $destroy[1] = 0;

                $BuildLevelStrength=array(0=>0,1,2,2,3,4,6,8,10,12,14,17,20,23,27,31,35,39,43,48,53,58,64,70,76,88,95,102,109,117,125,133,141,149,158,167,176,186,196,206,216,226,237,248,259,271,283,295,307,319,332,345,358,372,386,
                    400,414,428,443,458,473,489,505,521,537,553,570,587,604,622,640,658,676,694,713,732,751,771,791,811,831,851,872,893,914,936,958,980,1002,1024,1047,
                    1070,1093,1117,1141,1165,1189,1213,1238,1260,1286);
                if($catpCount1 > 0 && ($targetBuilding[0]['f'] != 0 || $targetBuilding[0]['ft'] != 0) && $Attacker['attackdata']['ctar1']!=255) {
                    if($targetBuilding[0]['ft']==40) {$tmpAAP = 1;} else {$tmpAAP = $archArtePower;}
                    $need = round((($Defender['inhabitants'] < $Attacker['inhabitants'] ? min(3,pow($Attacker['inhabitants'] / $Defender['inhabitants'],0.3)) : 1) * (pow($targetBuilding[0]['lvl'],2) + $targetBuilding[0]['lvl'] + 1) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8'])) / 200) / max(1,($Attacker['attackdata']['ctar1']>=18?max(1,$stonemasonPower + $tmpAAP):1)))) + 0.5);
                    $BuildingLevelMax = 20;
                    if(($Defender['iscapital'] != 1 && $Attacker['attackdata']['ctar1'] <= 18) || $Attacker['attackdata']['ctar1']==36) { $BuildingLevelMax = 10; }
                    if($Attacker['attackdata']['ctar1']>=5 && $Attacker['attackdata']['ctar1']<=9) { $BuildingLevelMax = 5; }
                    if($Attacker['attackdata']['ctar1']==40) { $BuildingLevelMax = 100; }
                    $needMax = round((($Defender['inhabitants'] < $Attacker['inhabitants'] ? min(3,pow($Attacker['inhabitants'] / $Defender['inhabitants'],0.3)) : 1) * (pow($targetBuilding[0]['lvl'],2) + $targetBuilding[0]['lvl'] + 1) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8'])) / 200) / max(1,($Attacker['attackdata']['ctar1']>=18?max(1,$stonemasonPower + $tmpAAP):1)))) + 0.5);
                    //$need = round(((($catapultMoralBonus * (pow($targetBuilding[0]['lvl'],2) + $targetBuilding[0]['lvl'] + 1)) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                    // Number of catapults to take down the building
                    $result['had']['defender']['cataneed1'] = $need;
                    if ($catpCount1>=$need){
                        //$targetBuilding[0]['lvl'] = 0;
                        $destroy[0] = $targetBuilding[0]['lvl'];
                        $targetBuilding[0]['lvl'] = 0;
                    } else {
                        //echo $need;
                        $tmpNeed = 0;
                        while ($targetBuilding[0]['lvl']>0){
                            //$tmpNeed = round(((($catapultMoralBonus * (pow($targetBuilding[0]['lvl'],2) + $targetBuilding[0]['lvl'] + 1)) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                            //$tmpNeed -= round(((($catapultMoralBonus * (pow($targetBuilding[0]['lvl']-1,2) + $targetBuilding[0]['lvl'])) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                            $tmpNeed = ($BuildLevelStrength[$targetBuilding[0]['lvl']] - $BuildLevelStrength[$targetBuilding[0]['lvl']-1]) * $needMax / $BuildLevelStrength[$BuildingLevelMax];

                            // echo $tmpNeed;die;

                            //echo $tmpNeed.': '.$catpCount1.'<br/>';
                            if ($catpCount1>=$tmpNeed){
                                $targetBuilding[0]['lvl'] -= 1;
                                $catpCount1 -= $tmpNeed;
                                $destroy[0]++;
                            } else {
                                break;
                            }
                        }
                        //var_dump($targetBuilding);
                    }
                }
              //  if($targetBuilding[0]['ft'] == $targetBuilding[1]['ft']){
              //      $targetBuilding[1]['lvl'] = $targetBuilding[0]['lvl'];
              //  }

                if($catpCount2 > 0 && ($targetBuilding[1]['f'] != 0 || $targetBuilding[1]['ft'] != 0) && $Attacker['attackdata']['ctar2']!=255){
                    if($targetBuilding[1]['ft']==40) {$tmpAAP = 1;} else {$tmpAAP = $archArtePower;}
                    $need = round(((($catapultMoralBonus * (pow($targetBuilding[1]['lvl'],2) + $targetBuilding[1]['lvl'] + 1)) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                    $BuildingLevelMax = 20;
                    if(($Defender['iscapital'] != 1 && $Attacker['attackdata']['ctar2'] <= 18) || $Attacker['attackdata']['ctar2']==36) { $BuildingLevelMax = 10; }
                    if($Attacker['attackdata']['ctar2']>=5 && $Attacker['attackdata']['ctar2']<=9) { $BuildingLevelMax = 5; }
                    if($Attacker['attackdata']['ctar2']==40) { $BuildingLevelMax = 100; }
                    $needMax = round((($Defender['inhabitants'] < $Attacker['inhabitants'] ? min(3,pow($Attacker['inhabitants'] / $Defender['inhabitants'],0.3)) : 1) * (pow($targetBuilding[0]['lvl'],2) + $targetBuilding[0]['lvl'] + 1) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8'])) / 200) / max(1,($Attacker['attackdata']['ctar2']>=18?max(1,$stonemasonPower + $tmpAAP):1)))) + 0.5);
                   
                    // Number of catapults to take down the building
                    $result['had']['defender']['cataneed2'] = $need;

                    if ($catpCount2>=$need){
                        //$targetBuilding[0]['lvl'] = 0;
                        $destroy[1] = $targetBuilding[1]['lvl'];
                        $targetBuilding[1]['lvl'] = 0;
                    } else {
                        while ($targetBuilding[1]['lvl']!=0){
                            $tmpNeed = round(((($catapultMoralBonus * (pow($targetBuilding[1]['lvl'],2) + $targetBuilding[1]['lvl'] + 1)) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                            $tmpNeed -= round(((($catapultMoralBonus * (pow($targetBuilding[1]['lvl']-1,2) + $targetBuilding[1]['lvl'])) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                            if ($catpCount2>=$tmpNeed){
                                $targetBuilding[1]['lvl'] -= 1;
                                $catpCount2 -= $tmpNeed;
                                $destroy[1]++;
                            } else {
                                break;
                            }
                        }
                    }
                }

                if($destroy[0] > 20)
                    $destroy[0] = 20;

                if($destroy[1] > 20)
                    $destroy[1] = 20;

                    
                for($i=0;$i<=1;$i++){
                    $ctar = $targetBuilding[$i];
                    //var_dump($ctar['ft']);
                    if ($ctar['f']||$ctar['ft']) {
                        if($ctar['f']==99 || $ctar['ft']==40){
                            if($destroy[$i]==0) continue;
//echo '1';
                           // die();
                           
                           //var_dump( $destroy[$i]);
                            $result['casualties']['defender']['ctar'][$i] = $ctar;
                        $result['casualties']['defender']['ctar'][$i]['lvl'] = $destroy[$i];
                        $result['reminders']['defender']['buildings']['f99'] = $result['had']['defender']['ctar'][$i]['lvl'] - $destroy[$i];
                        
                        //echo $ctar['lvl']." <- lvl<br>";
                        if ($ctar['lvl']==100) $result['reminders']['defender']['buildings']['f99t'] = 0;
                        }else{
                        //echo $result['had']['defender']['ctar'][$i]['lvl']." Had - caus :";
                        //echo $destroy[$i].".<br>";
                        $result['casualties']['defender']['ctar'][$i] = $ctar;
                        $result['casualties']['defender']['ctar'][$i]['lvl'] = $destroy[$i];
                        $result['reminders']['defender']['buildings']['f'.$ctar['f']] = $result['had']['defender']['ctar'][$i]['lvl']-$destroy[$i];
                        //echo $ctar['lvl']." <- lvl<br>";
                        if ($ctar['lvl']==0) $result['reminders']['defender']['buildings']['f'.$ctar['f'].'t'] = 0;
                        }
                    }
                }
               // var_dump( $result['reminders']['defender']['buildings']['f99']);
                //die();
                //
                //var_dump($result['casualties']['defender']['ctar']);
            }
//echo $destroy[0].":".$destroy[1];
            //var_dump($result['reminders']['defender']['ctar']);
            //var_dump($result['had']);
            //die;
            $result['had']['defender']['wall'] = $wall;
            if($ramCount > 0 && $wall!= 0) {
                $wctp = pow(($totalAP/$totalDP),1.5);
                $wctp = ($wctp >= 1)? 1-0.5/$wctp : 0.5*$wctp;
                $wctp *= $ramCount;
                $need = round(((($moralbonus * (pow($wall,2) + $wall + 1)) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b7']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                $result['had']['attacker']['ramneed'] = $need;
                if ($ramCount>=$need){
                    $wall = 0;
                } else {
                    while ($wall!=0){
                        $tmpNeed = round(((($moralbonus * (pow($wall,2) + $wall + 1)) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                        $tmpNeed -= round(((($moralbonus * (pow($wall-1,2) + $wall)) / (8 * (round(200 * pow(1.0205,$Attacker['smithy']['b8']))/200) / ($stonemasonPower*$tmpAAP))) + 0.5)/$breweryAttBonus);
                        if ($ramCount>=$tmpNeed){
                            $wall -= 1;
                            $ramCount -= $tmpNeed;
                        } else {
                            break;
                        }
                    }
                }
                $result['casualties']['defender']['wall'] = $result['had']['defender']['wall'] - $wall;
                $result['reminders']['defender']['buildings']['f40'] = $wall;
                if ($wall==0) $result['reminders']['defender']['buildings']['f40t'] = 0;

                // Number of rams that act
                $result[8] = $wctp;
            }

            $chiefCount = $result['had']['attacker']['overall']['u9']
                + $result['had']['attacker']['overall']['u19']
                + $result['had']['attacker']['overall']['u29']
                + $result['had']['attacker']['overall']['u39']
                + $result['had']['attacker']['overall']['u49'];
            $chiefCount -= round($result['had']['attacker']['overall']['u9']*$result[1])+
                round($result['had']['attacker']['overall']['u19']*$result[1])+
                round($result['had']['attacker']['overall']['u29']*$result[1])+
                round($result['had']['attacker']['overall']['u39']*$result[1])+
                round($result['had']['attacker']['overall']['u49']*$result[1]);
            if ($chiefCount>0){
                if ($Defender['iscapital']){
                    $result['chief']['loyaltychange'] = 0;
                    $result['chief']['captured'] = 0;
                    $result['chief']['msg'] = 'REPORT_CANTCAPTURECAPITAL';
                } else {
                    global ${'cp'.CP};
                    if (${'cp'.CP}[$Attacker['villagecount']+1]>$Attacker['cp']){
                        $result['chief']['loyaltychange'] = 0;
                        $result['chief']['captured'] = 0;
                        $result['chief']['msg'] = 'REPORT_LOWCP';
                    } else{
                        $buildarray = $result['reminders']['defender']['buildings'];
                        $rplvl = 0;
                        for($i=19;$i<=40;$i++){
                            if (($buildarray['f'.$i.'t']==25) || ($buildarray['f'.$i.'t']==26)){
                                $rplvl = $buildarray['f'.$i];
                            }
                        }
                        if ($rplvl>0){
                            $result['chief']['loyaltychange'] = 0;
                            $result['chief']['captured'] = 0;
                            $result['chief']['msg'] = 'REPORT_CHIEFFAILED_REDIDENCEEXIST';
                        } else {
                            $baseLoyaltyChange = array( 1 => rand(19,25),
                                                        2 => rand(15,21),
                                                        3 => rand(15,20),
                                                        4 => rand(5,10),
                                                        5 => rand(80,120));
                            $totalBaseLC = 0;
                            for($i=0;$i<=5;$i++){
                                $totalBaseLC += $baseLoyaltyChange[$i]
                                    *($result['had']['attacker']['overall']['u'.(($i*10)-1)]-
                                        round(($result['had']['attacker']['overall']['u'.(($i*10)-1)])*$result[1]));
                            }
                            $result['chief']['loyaltychange'] = $totalBaseLC + ($Attacker['hasgcel']?rand(1,5):0) - ($Defender['hasgcel']?rand(1,5):0);
                            $result['chief']['loyaltyreminders'] = $Defender['loyalty'] - $result['chief']['loyaltychange'];
                            if ($result['chief']['loyaltyreminders'] <= 0) {
                                if ( $Attacker['avexpslots'] <= 0){
                                    $result['chief']['captured'] = 0;
                                    $result['chief']['msg'] = 'REPORT_LOWSLOT';
                                } else {
                                    $result['chief']['captured'] = 1;
                                    $result['chief']['msg'] = 'REPORT_CHIEFSUCCESS';
                                }
                            } else {
                                $result['chief']['captured'] = 0;
                                $result['chief']['msg'] = 'REPORT_LOYALTYLOWERED[=]'.$Defender['loyalty'].'[=]'.$result['chief']['loyaltyreminders'];
                            }
                        }
                    }
                }
            }
        }

        $result[6] = pow($totalAP/$totalDP*$moralbonus,$Mfactor);

        $result['casualties']['attacker']['uid'] = $Attacker['uid'];
        $result['casualties']['attacker']['tribe'] = $Attacker['tribe'];
        $result['casualties']['attacker']['alliance'] = $Attacker['alliance'];
        $result['reminders']['attacker']['uid'] = $Attacker['uid'];
        $result['reminders']['attacker']['tribe'] = $Attacker['tribe'];
        $result['reminders']['attacker']['alliance'] = $Attacker['alliance'];
        $result['casualties']['defender']['uid'] = $Defender['uid'];
        $result['casualties']['defender']['tribe'] = $Defender['tribe'];
        $result['casualties']['defender']['alliance'] = $Defender['alliance'];
        $result['reminders']['defender']['uid'] = $Defender['uid'];
        $result['reminders']['defender']['tribe'] = $Defender['tribe'];
        $result['reminders']['defender']['alliance'] = $Defender['alliance'];
        for($i=1;$i<=50;$i++){
            global ${'u'.$i};
            if ($result['had']['attacker']['u'.$i]>0){
                $result['casualties']['attacker']['u'.$i] = round($result[1]*$result['had']['attacker']['u'.$i]);
                $result['reminders']['attacker']['u'.$i] = $result['had']['attacker']['u'.$i]-$result['casualties']['attacker']['u'.$i];
            }
            if ($result['had']['defender']['u'.$i]>0){
                $result['casualties']['defender']['u'.$i] = round($result[2]*$result['had']['defender']['u'.$i]);
                $result['reminders']['defender']['u'.$i] = $result['had']['defender']['u'.$i]-$result['casualties']['defender']['u'.$i];
            }
            if($result['had']['attacker']['overall']['u'.$i]){
                $result['casualties']['attacker']['overall']['u'.$i] = round($result[1]*$result['had']['attacker']['overall']['u'.$i]);
                $result['reminders']['attacker']['overall']['u'.$i] = $result['had']['attacker']['overall']['u'.$i]-$result['casualties']['attacker']['overall']['u'.$i];
            }
            if($result['had']['defender']['overall']['u'.$i]){
                $result['casualties']['defender']['overall']['u'.$i] = round($result[2]*$result['had']['defender']['overall']['u'.$i]);
                $result['reminders']['defender']['overall']['u'.$i] = $result['had']['defender']['overall']['u'.$i]-$result['casualties']['defender']['overall']['u'.$i];
            }
            for($tc=0;$tc<=5;$tc++){
                if($result['had']['attacker']['tribedoverall'][$tc]['u'.$i]){
                    $result['casualties']['attacker']['tribedoverall'][$tc]['u'.$i] = round($result[1]*$result['had']['attacker']['tribedoverall'][$tc]['u'.$i]);
                    $result['reminders']['attacker']['tribedoverall'][$tc]['u'.$i] = $result['had']['attacker']['tribedoverall'][$tc]['u'.$i]-$result['casualties']['attacker']['tribedoverall'][$tc]['u'.$i];
                }
                if($result['had']['defender']['tribedoverall'][$tc]['u'.$i]){
                    $result['casualties']['defender']['tribedoverall'][$tc]['u'.$i] = round($result[2]*$result['had']['defender']['tribedoverall'][$tc]['u'.$i]);
                    $result['reminders']['defender']['tribedoverall'][$tc]['u'.$i] = $result['had']['defender']['tribedoverall'][$tc]['u'.$i]-$result['casualties']['defender']['tribedoverall'][$tc]['u'.$i];
                }
            }
        }

        if (isset($result['chief']['captured']) && $result['chief']['captured']==1){
            for($i=0;$i<=5;$i++){
                if (isset($result['reminders']['attacker']['overall']['u'.(($i*10)-1)]) && $result['reminders']['attacker']['overall']['u'.(($i*10)-1)]>=1){
                    $result['reminders']['attacker']['overall']['u'.(($i*10)-1)] -= 1;
                    break;
                }
            }
        }

        if (isset($Enforces) && count($Enforces)>0){
            $enforcesCount = count($Enforces);
            for($ec=0;$ec<$enforcesCount;$ec++){
                $enforce = $Enforces[$ec];
                $result['casualties']['enforces'][$ec]['id'] = $enforce['id'];
                $result['casualties']['enforces'][$ec]['from'] = $enforce['from'];
                $result['casualties']['enforces'][$ec]['vref'] = $enforce['vref'];
                $result['casualties']['enforces'][$ec]['uid'] = $enforce['uid'];
                $result['casualties']['enforces'][$ec]['tribe'] = $enforce['tribe'];
                $result['casualties']['enforces'][$ec]['alliance'] = $enforce['alliance'];
                $result['reminders']['enforces'][$ec]['id'] = $enforce['id'];
                $result['reminders']['enforces'][$ec]['from'] = $enforce['from'];
                $result['reminders']['enforces'][$ec]['vref'] = $enforce['vref'];
                $result['reminders']['enforces'][$ec]['uid'] = $enforce['uid'];
                $result['reminders']['enforces'][$ec]['tribe'] = $enforce['tribe'];
                $result['reminders']['enforces'][$ec]['alliance'] = $enforce['alliance'];
                for($i=1;$i<=50;$i++){
                    if(!isset($result['casualties']['enforces'][$ec]['u'.$i])){$result['casualties']['enforces'][$ec]['u'.$i]=0;}
                    $result['casualties']['enforces'][$ec]['u'.$i] += round($result[2]*(isset($result['had']['enforces'][$ec]['u'.$i])?$result['had']['enforces'][$ec]['u'.$i]:0));
                    if(!isset($result['reminders']['enforces'][$ec]['u'.$i])){$result['reminders']['enforces'][$ec]['u'.$i]=0;}
                    $result['reminders']['enforces'][$ec]['u'.$i] += (isset($result['had']['enforces'][$ec]['u'.$i])?$result['had']['enforces'][$ec]['u'.$i]:0)-$result['casualties']['enforces'][$ec]['u'.$i];
                    if(!isset($result['casualties']['enforces'][$ec]['count'])){$result['casualties']['enforces'][$ec]['count']=0;}
                    $result['casualties']['enforces'][$ec]['count'] += round($result[2]*(isset($result['had']['enforces'][$ec]['count'])?$result['had']['enforces'][$ec]['count']:2));
                    if(!isset($result['reminders']['enforces'][$ec]['count'])){$result['reminders']['enforces'][$ec]['count']=0;}
                    $result['reminders']['enforces'][$ec]['count'] += (isset($result['had']['enforces'][$ec]['count'])?$result['had']['enforces'][$ec]['count']:0)-$result['casualties']['enforces'][$ec]['count'];
                    if(!isset($result['casualties']['enforces'][$ec]['pop'])){$result['casualties']['enforces'][$ec]['pop']=0;}
                    $result['casualties']['enforces'][$ec]['pop'] += round($result[2]*(isset($result['had']['enforces'][$ec]['pop'])?$result['had']['enforces'][$ec]['pop']:0));
                    if(!isset($result['reminders']['enforces'][$ec]['pop'])){$result['reminders']['enforces'][$ec]['pop']=0;}
                    $result['reminders']['enforces'][$ec]['pop'] += (isset($result['had']['enforces'][$ec]['pop'])?$result['had']['enforces'][$ec]['pop']:0)-$result['casualties']['enforces'][$ec]['pop'];
                }
            }
        }

        $result['casualties']['attacker']['count'] = round($result[1]*$result['had']['attacker']['count']);
        $result['reminders']['attacker']['count'] = $result['had']['attacker']['count']-$result['casualties']['attacker']['count'];
        $result['casualties']['attacker']['pop'] = round($result[1]*$result['had']['attacker']['pop']);
        $result['reminders']['attacker']['pop'] = $result['had']['attacker']['pop']-$result['casualties']['attacker']['pop'];
        $result['casualties']['attacker']['overall']['pop'] = round($result[1]*$result['had']['attacker']['overall']['pop']);
        $result['reminders']['attacker']['overall']['pop'] = $result['had']['attacker']['overall']['pop']-$result['casualties']['attacker']['overall']['pop'];
        $totalgetheart = $result[1];
        //echo $result[1]." ->";
        if($Attacker['hero'] && $result['had']['attacker']['count'] == 1){
            if($result[1] > 0.75){
                $result[1] = 1;
            }
            elseif($result[1] < 0.75){
                $result[1] = 0;
            }
        }
        //echo $result[1];die;
        $result['casualties']['attacker']['overall']['count'] = round($result[1]*$result['had']['attacker']['overall']['count']);
        $result['reminders']['attacker']['overall']['count'] =$result['had']['attacker']['overall']['count']-$result['casualties']['attacker']['overall']['count'];

        for($tc=0;$tc<=5;$tc++){
            $result['casualties']['attacker']['tribedoverall'][$tc]['pop'] = round($result[1]*$result['had']['attacker']['tribedoverall'][$tc]['pop']);
            $result['reminders']['attacker']['tribedoverall'][$tc]['pop'] = $result['had']['attacker']['tribedoverall'][$tc]['pop']-$result['casualties']['attacker']['tribedoverall'][$tc]['pop'];
            $result['casualties']['attacker']['tribedoverall'][$tc]['count'] = round($result[1]*$result['had']['attacker']['tribedoverall'][$tc]['count']);
            $result['reminders']['attacker']['tribedoverall'][$tc]['count'] = $result['had']['attacker']['tribedoverall'][$tc]['count']-$result['casualties']['attacker']['tribedoverall'][$tc]['count'];
        }

        $result['casualties']['defender']['count'] = round($result[2]*$result['had']['defender']['count']);
        $result['reminders']['defender']['count'] = $result['had']['defender']['count']-$result['casualties']['defender']['count'];
        $result['casualties']['defender']['pop'] = round($result[2]*$result['had']['defender']['pop']);
        $result['reminders']['defender']['pop'] = $result['had']['defender']['pop']-$result['casualties']['defender']['pop'];
        $result['casualties']['defender']['overall']['pop'] = round($result[2]*$result['had']['defender']['overall']['pop']);
        $result['reminders']['defender']['overall']['pop'] = $result['had']['defender']['overall']['pop']-$result['casualties']['defender']['overall']['pop'];
        $result['casualties']['defender']['overall']['count'] = round($result[2]*$result['had']['defender']['overall']['count']);
        $result['reminders']['defender']['overall']['count'] = $result['had']['defender']['overall']['count']-$result['casualties']['defender']['overall']['count'];
        for($tc=0;$tc<=5;$tc++){
            $result['casualties']['defender']['tribedoverall'][$tc]['pop'] = round($result[2]*$result['had']['defender']['tribedoverall'][$tc]['pop']);
            $result['reminders']['defender']['tribedoverall'][$tc]['pop'] = $result['had']['defender']['tribedoverall'][$tc]['pop']-$result['casualties']['defender']['tribedoverall'][$tc]['pop'];
            $result['casualties']['defender']['tribedoverall'][$tc]['count'] = round($result[2]*$result['had']['defender']['tribedoverall'][$tc]['count']);
            $result['reminders']['defender']['tribedoverall'][$tc]['count'] = $result['had']['defender']['tribedoverall'][$tc]['count']-$result['casualties']['defender']['tribedoverall'][$tc]['count'];
        }

        if ($Attacker['hero']){
            
            $hero = $Attacker['hero'];
            $heroBonusExp = (($hero['extraexpgain']*HEROATTRSPEED)+($hero['itemextraexpgain']*ITEMATTRSPEED))/100;
            $expGained = ($result['casualties']['defender']['overall']['pop'])*(1+$heroBonusExp);
            $hero['experience'] += $expGained;
            $damage_health=round(100*$result[1]);
          
            if ($damage_health<0) $damage_health = 0;
            $hero['health'] -= $damage_health;
            if ($hero['health']<=3){
                $hero['dead'] = 1;
                $hero['health'] = 0;
                $result['casualties']['attacker']['hero'] = $hero;
                $result['casualties']['attacker']['tribedoverall'][$Attacker['tribe']]['hero'][] = $hero;
                $result['casualties']['attacker']['overall']['hero'][] = $hero;
              //  var_dump($result['casualties']['attacker']['overall']['hero']);
            } else {
                $heroresist = $hero['extraresist']+$hero['itemextraresist'];
                $hero['health'] -= $heroresist;
                $hero['dead'] = 0;
                $result['reminders']['attacker']['hero'] = $hero;
                $result['reminders']['attacker']['tribedoverall'][$Attacker['tribe']]['hero'][] = $hero;
                $result['reminders']['attacker']['overall']['hero'][] = $hero;
            }

        }
       // die();

        if (isset($Defender['hero'])){
            $hero = $Defender['hero'];
            $heroBonusExp = $hero['extraexpgain']+$hero['itemextraexpgain'];
            $expGained = ($result['casualties']['attacker']['overall']['pop'])*(1+$heroBonusExp);
            $hero['experience'] += $expGained;
            $damage_health=round(100*$result[2]);
            if ($damage_health<0) $damage_health = 0;
            $hero['health'] -= $damage_health;
            if ($hero['health']<=0){
                $hero['dead'] = 1;
                $hero['health'] = 0;
                $result['casualties']['defender']['hero'] = $hero;
                $result['casualties']['defender']['tribedoverall'][0]['hero'][] = $hero;
                $result['casualties']['defender']['overall']['hero'][] = $hero;
            } else {
                $heroresist = $hero['extraresist']+$hero['itemextraresist'];
                $hero['health'] -= $heroresist;
                $result['reminders']['defender']['hero'] = $hero;
                $result['reminders']['defender']['tribedoverall'][0]['hero'][] = $hero;
                $result['reminders']['defender']['overall']['hero'][] = $hero;
            }

        }


        if (isset($Enforces) && count($Enforces)>0) {
            $enforcesCount = count($Enforces);
            for($ec=0;$ec<$enforcesCount;$ec++){
                $enforce = $Enforces[$ec];
                if($enforce['hero']) {
                    $hero = $enforce['hero'];
                    $heroBonusExp = $hero['extraexpgain']+$hero['itemextraexpgain'];
                    $expGained = ($result['casualties']['attacker']['overall']['pop'])*(1+$heroBonusExp);
                    $hero['experience'] += $expGained;
                    $damage_health=round(100*$result[2]);
                    if ($damage_health<0) $damage_health = 0;
                    $hero['health'] -= $damage_health;
                    if ($hero['health']<=0){
                        $hero['dead'] = 1;
                        $hero['health'] = 0;
                        $result['casualties']['enforce'][$ec]['hero'] = $hero;
                        $result['casualties']['defender']['tribedoverall'][$enforce['tribe']]['hero'][] = $hero;
                        $result['casualties']['defender']['overall']['hero'][] = $hero;
                    } else{
                        $heroresist = $hero['extraresist']+$hero['itemextraresist'];
                        $hero['health'] -= $heroresist;
                        $result['reminders']['enforce'][$ec]['hero'] = $hero;
                        $result['reminders']['defender']['tribedoverall'][$enforce['tribe']]['hero'][] = $hero;
                        $result['reminders']['defender']['overall']['hero'][] = $hero;
                    }
                }
            }
        }

        if($Attacker['attackdata']['attack_type'] == 3) {
            if((!isset($result['chief']['captured']) || $result['chief']['captured']==0) && isset($Defender['tocapturearties']) && !empty($Defender['tocapturearties']) && isset($result['reminders']['attacker']['hero'])){
                $dBuildingArray = $result['reminders']['defender']['buildings'];
                $dTreasury = 0;
                for($i=19;$i<=39;$i++){
                    if($dBuildingArray['f'.$i.'t']==27){
                        $dTreasury = $dBuildingArray['f'.$i];
                        break;
                    }
                }
                if ($dTreasury<=0){
                    $aBuildingArray = $Attacker['buildings'];
                    $aTreasury = 0;
                    for($i=19;$i<=39;$i++){
                        if($aBuildingArray['f'.$i.'t']==27){
                            $aTreasury = $aBuildingArray['f'.$i];
                            break;
                        }
                    }
                    foreach($Defender['tocapturearties'] as $art){
                        if (($aTreasury>=10 && $art['size']==1) || $aTreasury>=20){
                            $result['hero']['claimarties'][] = $art; break;
                        }
                    }
                    $claimedArtCount = 0;
                    if(isset($result['hero'])) $claimedArtCount = count($result['hero']['claimarties']);
                    if ($claimedArtCount>0){
                        $result['hero']['msg'] = 'REPORT_ARTIESCLAIMED[=]'.$claimedArtCount.'';
                    }
                }
            }
        }

        if($Attacker['attackdata']['attack_type'] == 4) {
            if ($Defender['isoasis'] && $result['reminders']['defender']['overall']['count']<=0){
                $toOases = $database->getOMInfo($Attacker['attackdata']['to']);
                $fromVillage = $database->getMInfo($Attacker['attackdata']['from']);
                $difx = $toOases['x']-$fromVillage['x'];$dify = $toOases['y']-$fromVillage['y'];
                $distance = sqrt(($difx*$difx)+($dify*$dify));
                if ($distance<4.9497474683058326708059105347339){
                    if (isset($result['reminders']['attacker']['hero'])) {
                        if ($Attacker['avoasisslots']<=0){
                            $result['hero']['loyaltychange'] = 0;
                            $result['hero']['captured'] = 0;
                            $result['hero']['msg'] = 'REPORT_HEROMANSIONLOWSLOT';
                        } else {
                            if ($Defender['uid'] == 3){$result['hero']['loyaltychange'] = 100;}
                            else {$result['hero']['loyaltychange'] = floor(100 / min(3,(4-$database->VillageOasisCount($Attacker['attackdata']['to']))));}
                            $result['hero']['loyaltyreminders'] = $Defender['loyalty']-$result['hero']['loyaltychange'];
                            if ($result['hero']['loyaltyreminders']>0){
                                $result['hero']['captured'] = 0;
                                $result['hero']['msg'] = 'REPORT_LOYALTYLOWERED['.$Defender['loyalty'].']['.$result['hero']['loyaltyreminders'].']';
                            } else {
                                $result['hero']['captured'] = 1;
                                $result['hero']['msg'] = 'REPORT_SUCCESSOASISCAPTURED';
                            }
                        }
                    }
                }
            }
        }

        // Work out bounty
        
        $max_bounty = 0;
        for($i=1;$i<=50;$i++) {
            if (isset($result['casualties']['attacker']['u'.$i]))
                $max_bounty += ($Attacker['u'.$i]-$result['casualties']['attacker']['u'.$i])*${'u'.$i}['cap'];
        }

        if($Attacker['hero']){
            $hero = $Attacker['hero'];
            $heroBonusRob = $hero['rob']*HEROATTRSPEED+$hero['itemrob']*ITEMATTRSPEED;
            $max_bounty = $max_bounty*(1+($heroBonusRob/100));
            //die($heroBonusRob);
        }
        $max_bounty = floor($max_bounty);
        // die;
        $result['reminders']['attacker']['bounty_cap'] = $max_bounty;
        // calculate rob
        if ($result['had']['defender']['res_array']){
            if (!$Defender['isoasis']){
                // get toatal cranny value:
                global $bid23;
                $buildarray = $result['reminders']['defender']['buildings'];
                $cranny_eff = 0;
                for($i=19;$i<=39;$i++){
                    if($buildarray['f'.$i.'t']==23){
                        if($buildarray['f'.$i.'']>0) $cranny_eff += $bid23[$buildarray['f'.$i.'']]['attri'];
                    }
                }
                //fixed cranny by shadow
                $confArteEff2 = 1;

                $cranny_eff *= STORAGE_MULTIPLIER*$confArteEff2;

                //cranny efficiency
                $atk_bonus = ($Attacker['tribe'] == 2)? (4/5) : 1;
                $def_bonus = ($Defender['tribe'] == 3)? 2 : 1;
                $cranny_eff = $cranny_eff * $atk_bonus *$def_bonus;
            } else {
                $cranny_eff = 0;
            }
//stealing start
            $had_array = $result['had']['defender']['res_array'];
            foreach($had_array as $key=>$value) { $av_array[$key] = max($value-$cranny_eff,0);}
            $totalAvRes = $av_array['wood'] + $av_array['clay'] + $av_array['iron'] + $av_array['crop'];
            $ta = array('wood'=>0, 'clay'=>0, 'iron'=>0, 'crop'=>0);
            $bounty = $max_bounty;
            $sort=$av_array;
            $t4=round($bounty/4);
            sort($sort);
            //die(var_dump($av_array[0]));
          $esma=array("wood","clay","iron","crop");
            $t2=$t3-$sort[1];
            $t1=$t2-$sort[2];
        //start
           while($bounty>0){
         if ($bounty>=$totalAvRes){
                    $ta = $av_array;
                    //pass
                    break;
                }
                
        if($sort[0]>=$t4) {
                    
                    $ta['wood'] = $t4;
                    $ta['clay'] = $t4;
                    $ta['iron'] = $t4;
                    $ta['crop'] = $t4;
                    break;
                }
        
        else{
                     for($q=0;$q<4;$q++){
                           if($av_array[$esma[$q]]==$sort[0]){
                        $ta[$esma[$q]]=$sort[0];
                     }
                      }
                
                     
               
                }
             
                 $t3=round($t4+($t4-$sort[0])/3);
                
                if($sort[1]>=$t3){
                 for($q=0;$q<4;$q++){
                     
                     if($ta[$esma[$q]]==0){
                         $ta[$esma[$q]]=$t3;
                          
                     }
                      
                 }
                
                  
                 break;
                 //die(var_dump($ta));
                }else{
                   for($q=0;$q<4;$q++){
                           if($av_array[$esma[$q]]==$sort[1]){
                        $ta[$esma[$q]]=$sort[1];
                     }
                      }
                }
                
                $t2=round($t3-($t3-$sort[1])/2);
                    // echo $t4*4;
                  
                     if($sort[2]>=$t2){
                 for($q=0;$q<4;$q++){
                     if($ta[$esma[$q]]==0){
                         $ta[$esma[$q]]=$t2;
                     }
                 }
                 
                 break;
                }else{
                      for($q=0;$q<4;$q++){
                           if($av_array[$esma[$q]]==$sort[2]){
                        $ta[$esma[$q]]=$sort[2];
                     }
                      }
                      $t1=$bounty;
                    for($q=0;$q<4;$q++){
                     
                     if($ta[$esma[$q]]!=0){
                         $t1 -= $ta[$esma[$q]] ;
                          
                     }
                      
                 }
                    for($q=0;$q<4;$q++){
                     
                     if($ta[$esma[$q]]==0){
                         $ta[$esma[$q]]=$t1;
                          
                     }
                      
                 }
                }
                  
                  
                     break;   
                }
                
                
                //die(var_dump($ta));
            
           
        //end
             $av_array['wood'] -= $ta['wood'];
             $av_array['clay'] -= $ta['clay'];
             $av_array['iron'] -= $ta['iron'];
             $av_array['crop'] -= $ta['crop'];
            $steal=$ta;
            $result['casualties']['defender']['res_array'] = $steal;
            $result['reminders']['defender']['res_array'] = $av_array;
            $result['reminders']['attacker']['bounty_array'] = $steal;
        }

        //hero fix by shadow
        //if the battle deside to kill do it
        if($result['had']['attacker']['count'] == 1 && $Attacker['hero'] && $result['casualties']['attacker']['overall']['count'] == 1 && $result[1] == 1){
            $result['casualties']['attacker']['hero']['dead'] = 1;
            $result['reminders']['attacker']['hero']['dead'] = 1;
            //$result['casualties']['attacker']['hero'] = 0;
            $result['reminders']['attacker']['count'] = 0;
            //$database->modifyHero2('health', 0, $Attacker['uid'], 0);
            $result['hero']['msg'] = ' <br> -100%';
            //$database->addNotice($ownerID, $data['to'], $ally, 9, 'REPORT_EXPL[=]' . addslashes($fromMInfo['name']) . '[=](' . addslashes($coor['x']) . '|' . addslashes($coor['y']) . ')', '' . $fromMInfo['wref'] . ',dead,REPORT_HNS,,' . $damage . ',' . $exp . '', $data['endtime']);
            //unset($result['reminders']['attacker']['count'],$result['reminders']['attacker']['hero']);
            $result['casualties']['attacker']['overall']['count'] = 0;
        }elseif(!isset($result['casualties']['attacker']['hero']['dead']) && $result['had']['attacker']['count'] == 1){

            $totalgetheart = substr($totalgetheart,0,3);

            if($totalgetheart < 0.1){
                $res = '-1%';
                $result['hero']['damage'] = 1;
                //$database->modifyHero2('health', 1, $Attacker['uid'], 2);
            }elseif($totalgetheart > 1){
                $res = '-100%';
                $result['hero']['damage'] = 100;
            }else{
                $healthhero = explode('.',$totalgetheart);
                $result['hero']['damage'] = $healthhero[1]*10;
                $res = '-'.($healthhero[1]*10).'%';
            }
//echo $result['hero']['damage'];die;
            $result['hero']['msg'] .= " <br>".$res;
            $result['hero']['msg2'] = 1;

        }elseif($result['casualties']['attacker']['hero']['dead'] == 1){
            $result['casualties']['attacker']['hero']['dead'] = 1;
            $result['reminders']['attacker']['hero']['dead'] = 1;
            //$result['reminders']['attacker']['count'] = 0;
            $result['hero']['msg'] = '-100%';
        }
        //  echo $result['hero']['msg'];
//die;
//echo "ali jende";die;
        return $result;
    }
}
$simulators = new Simulatorsss;