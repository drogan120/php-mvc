<?php
class About extends BaseController
{
    public function index()
    {
        $data = $this->model('usermodel')->getName();
        $this->view('about/index', $data);
    }
    public function page()
    {
        $data = [
            'nama' => 'drogan120',
            'job' => 'secret',
        ];
        $this->view('about/page', $data);
    }
}
