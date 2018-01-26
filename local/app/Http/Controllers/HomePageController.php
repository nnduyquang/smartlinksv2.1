<?phpnamespace App\Http\Controllers;use App\Employee;use App\Post;use App\Slider;use Illuminate\Http\Request;class HomePageController extends Controller{    public function getInfoHomepage()    {        $emps = Employee::where('emp_is_work', '=', '1')->orderBy('emp_order', 'ASC')->get();        $sliders = Slider::where('slider_is_active', '=', '1')->orderBy('slider_order', 'DESC')->get();        return view('frontend.trangchu.index', compact('emps', 'sliders'));    }    public function getContentGioiThieu()    {        $content = Post::where('path', '=', 'gioi-thieu')->first();        return view('frontend.trangcon.gioithieu', compact('content'));    }    public function getContentTuyenDung()    {        $content = Post::where('path', '=', 'tuyen-dung')->first();        $tuyendungs=Post::where('post_type', '=', 2)->get();        return view('frontend.tuyendung.tuyendung', compact('content','tuyendungs'));    }    public function getDetailTuyenDung($path){        $tuyendung=Post::where('path', '=', $path)->first();        return view('frontend.tuyendung.detail', compact('tuyendung'));    }    public function getContentBaoGia(){        $emps = Employee::where('emp_is_work', '=', '1')->orderBy('emp_order', 'ASC')->get();        return view('frontend.baogia.baogia', compact('emps'));    }    public function getContentDichVu($path)    {        switch ($path) {            case 'google-adwords':                return view('frontend.trangcon.google');                break;            case 'thiet-ke-website':                return view('frontend.trangcon.website');                break;            case 'facebook-ads':                return view('frontend.trangcon.facebook');                break;            default:                $content = Post::where('path', '=', $path)->first();                return view('frontend.trangcon.dichvu', compact('content'));        }    }    public function getContentHoiDap($path){        switch ($path) {            case 'hoi-dap-thiet-ke-website':                $page=Post::where('path','=',$path)->first();                $hoidaps=Post::where('post_type','=',6)->get();                return view('frontend.hoidap.hoidap',compact('page','hoidaps'));                break;            case 'hoi-dap-google-adwords':                $page=Post::where('path','=',$path)->first();                $hoidaps=Post::where('post_type','=',5)->get();                return view('frontend.hoidap.hoidap',compact('page','hoidaps'));                break;        }    }}