<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     *Hiển thị danh sách sản phẩm.
     */
    public function index()
    {
        // echo 'test index admin product';
        //Ví dụ dùng eloquen
        $all_products = Product::all()->toArray();
        echo '<pre>';
        print_r($all_products);
        // Ví dụ dùng query builder
        $all_products_2 = DB::table('products')->get()->toArray();
        print_r($all_products_2);

    }

    /**
     * Hiển thị form thêm sản phẩm.
     */
    public function create()
    {
        DB::table('products')->insert([
            [
            'name' => 'Nho',
            'description' => 'Nho rất ngon',
            'price'=> 100000,
            'image'=> 'nho.jpg'
            ],
            [
            'name' => 'Táo',
            'description' => 'Táo ăn rất tốt cho sức khỏe',
            'price'=> 200000,
            'image'=> 'tao.jpg'
            ],
            [
            'name' => 'Chuối',
            'description' => 'Chuối nhập khẩu ngon bổ rẻ',
            'price'=> 300000,
            'image'=> 'chuoi.jpg'
            ],
            [
            'name' => 'Dưa hấu',
            'description' => 'Dưa hấu Mai An Tiêm rất ngon',
            'price'=> 100000,
            'image'=> 'dua_hau.jpg'
            ],
            [
            'name' => 'Xoài',
            'description' => 'Xoài An Giang rất ngon',
            'price'=> 50000,
            'image'=> 'xoai.jpg'
            ],
        ]);
    }

    /**
     *Thực hiện lưu sản phẩm sau khi submit form.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Xem chi tiết 1 sản phẩm theo id.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Hiển thị form sửa sản phẩm theo id.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Cập nhật sau khi sửa theo id.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Xóa sản phẩm.
     */
    public function destroy(string $id)
    {
        //
    }
}
