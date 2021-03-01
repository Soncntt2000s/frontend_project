<?php

	namespace App;
	/**
	 *
	 */
	class cart
	{
		public $item = null;
		public $sluong = 0;
		public $tongtien = 0;

		public function __construct($oldCart)
		{
			if($oldCart)
			{
				$this->items = $oldCart->items;
				$this->sluong = $oldCart->sluong;
				$this->tongtien = $oldCart->tongtien;

			}
		}

		//Thêm sản phẩm vào giỏ hàng của bạn
		public function add($item , $id)
		{

			$giohang = ['so'=>0, 'dongia' => $item->dongia, 'item' => $item];

			// if($this->items)
			// {
			// 	if(array_key_exists($id, $this->items))
			// 	{
			// 		$giohang = $this->items[$id];
			// 	}
			// }

			$giohang['so']++;

			$giohang['dongia'] = $item->dongia * $giohang['so'];

			$this->items[$id] = $giohang;
			$this->sluong++;
			$this->tongtien += $item->dongia;
		}

		//Xóa 1 sản phẩm ra khỏi giỏ hàng
		public function reduceByOne($id)
		{
			$this->items[$id]['so']--;
			$this->items[$id]['dongia']-=$this->items[$id]['item']['dongia'];
			$this->sluong--;
			$this->tongtien -= $this->items[$id]['item']['dongia'];
			if($this->items[$id]['so']<=0)
			{
				unset($this->items[$id]);
			}
		}

		//Class sẽ xóa nhiều mặt hàng cùng 1 lúc
		public function removeItem ($id)
		{
			$this->sluong-=$this->items[$id]['so'];
			$this->tongtien-=$this->items['$id']['dongia'];
			unset($this->item[$id]);
		}

	}
