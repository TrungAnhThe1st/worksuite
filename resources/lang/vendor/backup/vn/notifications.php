<?php

return [
    'exception_message' => 'Exception message: :message',
    'exception_trace' => 'Exception trace: :trace',
    'exception_message_title' => 'Exception message',
    'exception_trace_title' => 'Exception trace',

    'backup_failed_subject' => 'Sao lưu :application_name thất bại',
    'backup_failed_body' => 'Cảnh báo: Lỗi xảy ra trong quá trình sao lưu :application_name',

    'backup_successful_subject' => 'Sao lưu :application_name thành công',
    'backup_successful_subject_title' => 'Sao lưu mới thành công!',
    'backup_successful_body' => 'Tin tốt, bảo sao lưu mới của :application_name được tạo thành công trên đĩa :disk_name.',

    'cleanup_failed_subject' => 'Dọn dẹp các bản sao lưu :application_name thất bại.',
    'cleanup_failed_body' => 'An error occurred while cleaning up the backups of :application_name',

    'cleanup_successful_subject' => 'Dọn dẹp các bản sao lưu :application_name thành công',
    'cleanup_successful_subject_title' => 'Dọn dẹp các bản sao lưu thành công!',
    'cleanup_successful_body' => 'Dọn dẹp bản sao lưu của :application_name trên đĩa :disk_name thành công.',

    'healthy_backup_found_subject' => 'Bản sao lưu của :application_name trên đĩa :disk_name ở trạng thái tốt',
    'healthy_backup_found_subject_title' => 'Bản sao lưu của :application_name ở trạng thái tốt',
    'healthy_backup_found_body' => 'Bản sao lưu của :application_name ở trạng thái tốt. Làm tốt lắm!',

    'unhealthy_backup_found_subject' => 'Cảnh báo: Bản sao lưu của :application_name gặp vấn đề',
    'unhealthy_backup_found_subject_title' => 'Cảnh báo: Bản sao lưu của :application_name gặp vấn đề. :problem',
    'unhealthy_backup_found_body' => 'Bản sao lưu của :application_name trên đĩa :disk_name gặp vấn đề.',
    'unhealthy_backup_found_not_reachable' => 'Không để tìm được đường dẫn đến bản sao lưu. :error',
    'unhealthy_backup_found_empty' => 'Không có bản sao lưu nào của ứng dụng này.',
    'unhealthy_backup_found_old' => 'Bản sao lưu gần nhất được tạo vào ngày :date đã quá cũ.',
    'unhealthy_backup_found_unknown' => 'Xin lỗi, lỗi không thể xác định đã xảy ra.',
    'unhealthy_backup_found_full' => 'Các bản sao lưu đang sử dụng quá nhiều dung lượng lưu trữ. Mức sử dụng hiện tại là :disk_usage cao hơn giới hạn cho phép của :disk_limit.',
];
