<?php

namespace App\Exports;

use App\Models\Order;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon;

class OrdersExport implements FromCollection,WithMapping , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order:: with ('Car','city')->get();
    }

    public function map($order): array
    {
        return [
            $order->id,
            $order->name,
            $order->tel,
            $order->salary ==1 ?" نعم" :"لا",
            $order->vehicle ==1 ?" نعم" :"لا",
            $order->city->name,
            $order->car->name,
            $order->carModel->name,
            date('d-m-Y', strtotime($order->created_at)),
            $order->status ==1 ?" تمت الموافقه" :"قيد الأنتظار",
        ];
    }

    public function headings(): array
    {
        return [
            'الرقم المسلسل',
            'الاسم',
            'رقم الجوال',
            'الراتب الشهري ١٠ الاف ريال فاكثر ',
            'عداد المركبة أقل من او يساوي 25 الف كم ',
            'المدينه',
            'السياره',
            'موديل السياره',
            'تاريخ الطلب',
            'حاله الطلب',

        ];
    }
}
