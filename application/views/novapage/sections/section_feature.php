<?php
$this->load->helper('text');

$get_section_feature    = $this->model_utama->view_where('tbl_novapage', array('key' => 'section_feature'))->row_array();
if (isset($get_section_feature['value'])) {
    if (!empty($get_section_feature['value'])) {
        $section_feature = json_decode($get_section_feature['value'], true);
    }
}
?>

<div id="<?php echo $item; ?>" class="section section-feature">
    <div class="section-container">
        <div class="section-background" <?php
                                        $skema_warna = 'default';
                                        switch ($section_feature['skema_warna']) {
                                            case 'image':
                                                $skema_warna = 'bg-image';
                                        ?> style="background:url('<?php echo base_url('asset/img_novapage/images/' . $section_feature['background']); ?>');
                            background-attachment: fixed; 
                            background-size:cover;
                            background-repeat:no-repeat" <?php
                                                            break;
                                                        case 'dark':
                                                            $skema_warna = 'dark';
                                                            break;
                                                        case 'light':
                                                            $skema_warna = 'light';
                                                            break;
                                                        default:
                                                            $skema_warna = 'default';
                                                            break;
                                                    }
                                                            ?>>
            <div class="section-header ">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <?php if (!empty($section_feature['judul'])) { ?>
                                <!-- <h2 class="card-header section-title"> -->
                                <!-- <?php echo strtoupper($section_feature['judul']); ?> -->
                                <!-- </h2> -->
                            <?php } ?>
                            <?php if (!empty($section_feature['deskripsi'])) { ?>
                                <div class="section-description">
                                    <!-- <?php echo $section_feature['deskripsi']; ?> -->
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-1">
                                GAMBAR
                            </div>
                            <div class="col-lg-2">
                                Facebook:
                                <div class="row">
                                    <div class="col-lg-12">
                                        partai gerindra jateng
                                    </div>
                                </div>
                            </div>
                            <!-- SOSMED -->
                            <div class="col-lg-1">
                                GAMBAR
                            </div>
                            <div class="col-lg-2">
                                Instagram:
                                <div class="row">
                                    <div class="col-lg-12">
                                        partai gerindra jateng
                                    </div>
                                </div>
                            </div>
                            <!-- SOSMED -->
                            <div class="col-lg-1">
                                GAMBAR
                            </div>
                            <div class="col-lg-2">
                                Twitter:
                                <div class="row">
                                    <div class="col-lg-12">
                                        partai gerindra jateng
                                    </div>
                                </div>
                            </div>
                            <!-- SOSMED -->
                            <div class="col-lg-1">
                                GAMBAR
                            </div>
                            <div class="col-lg-2">
                                Tiktok:
                                <div class="row">
                                    <div class="col-lg-12">
                                        partai gerindra jateng
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>