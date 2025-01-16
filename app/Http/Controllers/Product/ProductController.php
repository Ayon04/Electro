<?php

namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ProductService;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use phpDocumentor\Reflection\File;

class ProductController extends Controller
{       

  


    public function productPage()
    {

        try{
            
            return view('backend.products.addProducts');

    } 
    
    catch(\Throwable $ex){

        return redirect()->back();
    
    }
    }

    public function viewProducts()
    {
        try {
            $products = Product::all();

            return view('backend.products.productsList', compact('products'));
        } catch (\Throwable $e) {

            return redirect()->back()->with('error', "Error fetching data: " . $e->getMessage());
        }
    }


    public function store(CreateProductRequest $request, ProductService $productService)
    {
        try {
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('uploads', $filename, 'public');
                $validated['image'] = $path;
            }

            $product = $productService->store($validated);

            return redirect()->back()->with('success', 'Product created successfully');
        } catch (\Throwable $e) {
            return redirect()->back()->with('failed', 'Error adding product: ' . $e->getMessage());
        }
    }


    // public function destroyUser($id)
    // {

    //     try {
    //         $user = Product::findOrFail($id);

    //         return view('auth.Pages.delete-confirmation',compact('product'));
    //     }catch (\Throwable $e){


    //         return redirect()->back()->with('message_fail', "an error occur");
    //     }
    // }




    public function destroy($id)
    {
        try{
            
            $student = Product::destroy($id);
           return redirect()->back()->with('deleted',"Data Deleted");
        } 
        
        catch(\Throwable $ex){

            return redirect()->back()->with('message_fail',"Operation failed");
        
        }
    }

    public function editProduct($id)
    {
        try {
            $products = Product::findOrFail($id);  
            
            return view('backend.products.editProduct', compact('products'));
        } catch (\Throwable $ex) {
            return redirect()->back();
        }
    }

    public function updateProduct(
    
    UpdateProductRequest $updateProductRequest,
    
    ProductService $productService, $id)
    {
        try {
            $product = Product::findOrFail($id);

            $validated = $updateProductRequest->validated();
    
            if ($updateProductRequest->hasFile('image')) {
                
                if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
                    unlink(storage_path('app/public/' . $product->image));
                }
    
                $file = $updateProductRequest->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('uploads', $filename, 'public');
    
                $validated['image'] = $path;
            } else {
                $validated['image'] = $product->image;
            }
    
            $productService->update($id, $validated);
    
            return redirect()->back()->with('success', 'Product updated successfully!');
        } catch (\Throwable $e) {
            return redirect()->back()->with('failed', 'Error updating product: ' . $e->getMessage());
        }
    }
    

    


    
}


     


    




