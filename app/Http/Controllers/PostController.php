namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Fetch all posts from the database
        return view('posts.index', compact('posts')); // Pass data to view
    }
}
