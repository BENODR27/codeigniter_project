<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    public function browse()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->getAllProducts();

        return view('product/browse',$data);
    }
    public function add()
    {
        return view('product/add');
    }
    public function save()
    {
        $model = new ProductModel();

        // Example usage of createProduct method
        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'category_id'=>1,
        ];

        $model->createProduct($data);

        return redirect()->to(route_to('products/browse'));
    }
    public function edit($id)
    {
        $model = new ProductModel();

        // Example usage of getProductById method
        $data['product'] = $model->getProductById($id);

        return view('product/edit', $data);
    }

    public function update()
    {
        $model = new ProductModel();

        // Example usage of updateProduct method
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
        ];

        $model->updateProduct($id, $data);

        // Redirect or show a success message
        return redirect()->to(route_to('products/browse'));
    }
    public function view()
    {
        return view('product/view');

    }
    public function delete($id)
    {
        $model = new ProductModel();
        $model->deleteProduct($id);

        return redirect()->to(route_to('products/browse'));
    }
    // Example usage in a controller
// public function redirectToView($productId)
// {
//     // Redirect to the 'products.view' named route with the specified ID
//     return redirect()->to(route_to('products.view', ['id' => $productId]));
// }

}
