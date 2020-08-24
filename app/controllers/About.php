<?php
class About extends Controller
{
    public function index()
    {
        $this->view('about/index');
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
