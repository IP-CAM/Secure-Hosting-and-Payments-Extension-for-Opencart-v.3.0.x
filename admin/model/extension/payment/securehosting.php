<?php
class ModelExtensionPaymentSecureHosting extends Model {
    public function install() {
        $this->load->model('setting/setting');
        $data['payment_securehosting_shreference'] = "SH200000";
        $data['payment_securehosting_checkcode'] = "";
        $data['payment_securehosting_filename'] = "opencart_template.html";
        $data['payment_securehosting_test'] = 0;
        $data['payment_securehosting_order_status_id'] = "";
        $data['payment_securehosting_geo_zone_id'] = "0";
        $data['payment_securehosting_as'] = 0;
        $data['payment_securehosting_as_phrase'] = "";
        $data['payment_securehosting_as_referrer'] = "https://";
        $data['payment_securehosting_sort_order'] = "";
        $data['payment_securehosting_status'] = 1;

        $this->model_setting_setting->editSetting('payment_securehosting', $data);
    }

    public function uninstall() {
        $this->load->model('setting/setting');

        $this->model_setting_setting->deleteSetting($this->request->get['extension']);
    }

}