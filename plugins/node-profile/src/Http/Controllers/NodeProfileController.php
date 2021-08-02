<?php
namespace WebHoanHao\Pmtttm\NodeProfile\Http\Controllers;

// có thể use trực tiếp class của Laravel chứ ko use của ứng dụng chính
class NodeProfileController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['web','auth']);//bật chứng thực người dùng trước khi truy cập
        // chỉ bật khi nào cần chứng thực người dùng, session chứng thực sẽ lấy từ ứng dụng chính
    }
    public function index()
    {
        return view('node-profile::index', ['hello' => $this->hello]);
    }
}