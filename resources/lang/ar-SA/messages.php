<?php

return [

    'success' => [
        'added'             => ':نوع تمت الاضافة!',
        'updated'           => ':نوع تم التحديث!',
        'deleted'           => ':نوع تم الحذف!',
        'duplicated'        => ':نوع تم التكرار!',
        'imported'          => ':نوع تم الاستيراد!',
        'enabled'           => ':type enabled!',
        'disabled'          => ':type disabled!',
    ],
    'error' => [
        'over_payment'      => 'Error: Payment not added! Amount passes the total.',
        'not_user_company'  => 'خطأ: غير مسموح لك بادرة هذة الشركة!',
        'customer'          => 'Error: User not created! :name already uses this email address.',
        'no_file'           => 'خطأ: لم يتم تحديد ملف!',
        'last_category'     => 'Error: Can not delete the last :type category!',
        'invalid_token'     => 'Error: The token entered is invalid!',
        'import_column'     => 'Error: :message Sheet name: :sheet. Line number: :line.',
        'import_sheet'      => 'Error: Sheet name is not valid. Please, check the sample file.',
    ],
    'warning' => [
        'deleted'           => 'تحذير: غير مسموح لك بحذف <b>:اسم</b> لأن هذا : مرتبط ب.',
        'disabled'          => 'تحذير: غير مسموح لك بالغاء تفيل<b>:اسم</b> لأن هذا : مرتبط ب.',
    ],

];
