<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo Yii::$app->request->baseUrl.'/uploads/icon.png'; ?>" class="img-circle" alt="User Image"/>
               
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username;?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                  ['label' => 'Home', 'icon' => 'dashboard', 'url' => ['/site/index']],
                    
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Data Pegawai', 'icon' => 'users', 'url' => ['/pegawai']],
                    [
                        'label' => 'Referensi',
                        'icon' => 'server',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Riwayat Keluarga', 'icon' => 'child', 'url' => ['/riwayatkeluarga'],],
                            ['label' => 'Riwayat Pendidikan', 'icon' => 'child', 'url' => ['/riwayatpendidikan'],],
                            
                        ],
                    ],

                    [
                        'label' => 'Kepegawaian',
                        'icon' => 'server',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Jabatan', 'icon' => 'hourglass-half', 'url' => ['/jabatan'],],
                            ['label' => 'Pangkat', 'icon' => 'hourglass-half', 'url' => ['/pangkat'],],
                            ['label' => 'Diklat', 'icon' => 'hourglass-half', 'url' => ['/diklat'],],
                            ['label' => 'Cuti', 'icon' => 'hourglass-half', 'url' => ['/cuti'],],
                            
                        ],
                    ],
                    ['label' => 'Mutasi', 'icon' => 'navicon', 'url' => ['/mutasi']],
                    [
                        'label' => 'Laporan',
                        'icon' => 'file-pdf-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Nominatif', 'icon' => 'file-text-o', 'url' => ['/pegawai/laporan-nominatif'],['target'=>'_blank']],
                            ['label' => 'Duk', 'icon' => 'file-text-o', 'url' => ['/pangkat/laporan-duk'],],
                            
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
