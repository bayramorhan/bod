<?php $this->load->view('static/head') ?>
<?php $this->session->logged_in ? $this->load->view('static/header_logged') : $this->load->view('static/header') ?>
<?php $this->load->view('common/'.$page) ?>
<?php $this->load->view('static/footer') ?>
<?php $this->load->view('static/bottom') ?>
