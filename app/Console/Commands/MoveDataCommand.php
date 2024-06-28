<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MoveDataCommand extends Command
{
    protected $signature = 'data:move';
    protected $description = 'Move data from NewStyleLife to MadeInJapan';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            Log::info('MoveDataCommand started.');

            // Retrieve data from NewStyleLife
            $users = DB::connection('mysql')->table('users')->where('role', 'seller')->whereDate('created_at', now()->toDateString())->get();
            foreach ($users as $user) {
                DB::connection('made_in_japan')->table('users')->updateOrInsert(
                    ['id' => $user->id], // The condition to check for existing record
                    [
                        'role' => $user->role,
                        'name' => $user->name,
                        'email' => $user->email,
                        'password' => $user->password,
                        'user_photo' => $user->user_photo,
                        'phone' => $user->phone,
                        'address' => $user->address,
                        'status' => $user->status,
                        'email_verified_at' => $user->email_verified_at,
                        'noalert' => $user->noalert,
                        'created_by' => $user->created_by,
                        'remember_token' => $user->remember_token,
                        'created_at' => $user->created_at,
                        'updated_at' => $user->updated_at
                    ]
                );

                $seller = DB::connection('mysql')->table('sellers')->where('user_id', $user->id)->whereDate('created_at', now()->toDateString())->first();
                DB::connection('made_in_japan')->table('sellers')->updateOrInsert(
                    ['id' => $seller->id],
                    [
                        'user_id' => $seller->user_id,
                        'country_id' => $seller->country_id,
                        'bank_name' => $seller->bank_name,
                        'bank_acc_type' => $seller->bank_acc_type,
                        'bank_branch' => $seller->bank_branch,
                        'bank_acc_name' => $seller->bank_acc_name,
                        'bank_acc_no' => $seller->bank_acc_no,
                        'shop_name' => $seller->shop_name,
                        'shop_logo' => $seller->shop_logo,
                        'shop_establish' => $seller->shop_establish,
                        'phone' => $seller->phone,
                        'zip_code' => $seller->zip_code,
                        'prefecture' => $seller->prefecture,
                        'city' => $seller->city,
                        'chome' => $seller->chome,
                        'building' => $seller->building,
                        'room' => $seller->room,
                        'url' => $seller->url,
                        'commission' => $seller->commission,
                        'status' => $seller->status,
                        'coupon_status' => $seller->coupon_status,
                        'coupon_id' => $seller->coupon_id,
                        'created_at' => $seller->created_at,
                        'updated_at' => $seller->updated_at
                    ]
                );

                $subSellers = DB::connection('mysql')->table('subsellers')->where('seller_id', $seller->user_id)->whereDate('created_at', now()->toDateString())->get();
                foreach ($subSellers as $subSeller) {
                    DB::connection('made_in_japan')->table('subsellers')->updateOrInsert(
                        ['id' => $subSeller->id], // The condition to check for existing record
                        [
                            'seller_id' => $subSeller->seller_id,
                            'subseller_id' => $subSeller->subseller_id,
                            'name' => $subSeller->name,
                            'phone' => $subSeller->phone,
                            'email' => $subSeller->email,
                            'address' => $subSeller->address,
                            'status' => $subSeller->status,
                            'created_at' => $subSeller->created_at,
                            'updated_at' => $subSeller->updated_at
                        ]
                    );
                }
            }

            Log::info('Inserted or updated users in MadeInJapan.');

            $products = DB::connection('mysql')->table('products')->where('country_id', 111)->whereDate('created_at', now()->toDateString())->get();
            Log::info('Retrieved products from NewStyleLife.');

            foreach ($products as $product) {
                $brand = DB::connection('mysql')->table('brands')->where('id', $product->brand_id)->first();
                if ($brand) {
                    DB::connection('made_in_japan')->table('brands')->updateOrInsert(
                        ['id' => $brand->id],
                        [
                            'brand_name' => $brand->brand_name,
                            'brand_icon' => $brand->brand_icon,
                            'created_at' => $brand->created_at,
                            'updated_at' => $brand->updated_at
                        ]
                    );
                }

                $category = DB::connection('mysql')->table('categories')->where('id', $product->category_id)->whereDate('created_at', now()->toDateString())->first();
                if ($category) {
                    DB::connection('made_in_japan')->table('categories')->updateOrInsert(
                        ['id' => $category->id],
                        [
                            'category_name' => $category->category_name,
                            'category_icon' => $category->category_icon,
                            'created_at' => $category->created_at,
                            'updated_at' => $category->updated_at
                        ]
                    );
                }

                $subCategoryTitle = DB::connection('mysql')->table('sub_category_titles')->where('id', $product->sub_category_title_id)->whereDate('created_at', now()->toDateString())->first();
                if ($subCategoryTitle) {
                    DB::connection('made_in_japan')->table('sub_category_titles')->updateOrInsert(
                        ['id' => $subCategoryTitle->id],
                        [
                            'category_id' => $subCategoryTitle->category_id,
                            'sub_category_id' => $subCategoryTitle->sub_category_id,
                            'sub_category_titlename' => $subCategoryTitle->sub_category_titlename,
                            'created_at' => $subCategoryTitle->created_at,
                            'updated_at' => $subCategoryTitle->updated_at
                        ]
                    );
                }

                $subCategory = DB::connection('mysql')->table('sub_categories')->where('id', $product->sub_category_id)->whereDate('created_at', now()->toDateString())->first();
                if ($subCategory) {
                    DB::connection('made_in_japan')->table('sub_categories')->updateOrInsert(
                        ['id' => $subCategory->id],
                        [
                            'category_id' => $subCategory->category_id,
                            'sub_category_name' => $subCategory->sub_category_name,
                            'sub_category_title_id' => $subCategory->sub_category_title_id,
                            'created_at' => $subCategory->created_at,
                            'updated_at' => $subCategory->updated_at
                        ]
                    );
                }

                if ($product->coupon_id) {
                    $coupon = DB::connection('mysql')->table('coupons')->where('id', $product->coupon_id)->whereDate('created_at', now()->toDateString())->first();
                    if ($coupon) {
                        DB::connection('made_in_japan')->table('coupons')->updateOrInsert(
                            ['id' => $coupon->id],
                            [
                                'name' => $coupon->name,
                                'coupon_code' => $coupon->coupon_code,
                                'discount_amount' => $coupon->discount_amount,
                                'mini_amount' => $coupon->mini_amount,
                                'valid_count' => $coupon->valid_count,
                                'used_count' => $coupon->used_count,
                                'startdate' => $coupon->startdate,
                                'enddate' => $coupon->enddate,
                                'status' => $coupon->status,
                                'created_at' => $coupon->created_at,
                                'updated_at' => $coupon->updated_at
                            ]
                        );
                    }
                }

                $multiImgs = DB::connection('mysql')->table('multi_imgs')->where('product_id', $product->id)->whereDate('created_at', now()->toDateString())->get();
                foreach ($multiImgs as $multiImg) {
                    DB::connection('made_in_japan')->table('multi_imgs')->updateOrInsert(
                        ['id' => $multiImg->id],
                        [
                            'product_id' => $multiImg->product_id,
                            'photo_name' => $multiImg->photo_name,
                            'created_at' => $multiImg->created_at,
                            'updated_at' => $multiImg->updated_at
                        ]
                    );
                }

                DB::connection('made_in_japan')->table('products')->updateOrInsert(
                    ['id' => $product->id], // The condition to check for existing record
                    [
                        'product_code' => $product->product_code,
                        'brand_id' => $product->brand_id,
                        'country_id' => $product->country_id,
                        'category_id' => $product->category_id,
                        'sub_category_title_id' => $product->sub_category_title_id,
                        'sub_category_id' => $product->sub_category_id,
                        'special_sub_category_id' => $product->special_sub_category_id,
                        'seller_id' => $product->seller_id,
                        'subseller_id' => $product->subseller_id,
                        'product_name' => $product->product_name,
                        'product_qty' => $product->product_qty,
                        'in_stock' => $product->in_stock,
                        'product_tags' => $product->product_tags,
                        'product_size' => $product->product_size,
                        'product_color' => $product->product_color,
                        'original_price' => $product->original_price,
                        'selling_price' => $product->selling_price,
                        'seller_amount' => $product->seller_amount,
                        'discount_percent' => $product->discount_percent,
                        'short_desc' => $product->short_desc,
                        'long_desc' => $product->long_desc,
                        'care_instructions' => $product->care_instructions,
                        'product_thambnail' => $product->product_thambnail,
                        'commission' => $product->commission,
                        'commission_status' => $product->commission_status,
                        'com_price' => $product->com_price,
                        'status' => $product->status,
                        'coupon_status' => $product->coupon_status,
                        'coupon_id' => $product->coupon_id,
                        'estimate_date' => $product->estimate_date,
                        'delivery_price' => $product->delivery_price,
                        'shipping_country' => $product->shipping_country,
                        'updated_by' => $product->updated_by,
                        'created_at' => $product->created_at,
                        'updated_at' => $product->updated_at
                    ]
                );
            }

            Log::info('Inserted or updated products in MadeInJapan.');

            $this->info('Data moved successfully!');
        } catch (\Exception $e) {
            Log::error('MoveDataCommand error: ' . $e->getMessage());
            $this->error('Error: ' . $e->getMessage());
        }
    }



    // public function handle()
    // {
    //     try {
    //         // Test connection to NewStyleLife
    //         $products = DB::connection('mysql')->table('products')->where('country_id', 111)->get();
    //         $this->info('Connected to NewStyleLife and retrieved products.');

    //         // Insert data into MadeInJapan
    //         DB::connection('made_in_japan')->table('products')->insert(json_decode(json_encode($products), true));
    //         $this->info('Data moved successfully!');
    //     } catch (\Exception $e) {
    //         $this->error('Error: ' . $e->getMessage());
    //     }
    // }
}
