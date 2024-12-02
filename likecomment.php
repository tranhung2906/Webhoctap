<?php
include "config/db_connect.php";
if (isset($_POST['comment_id'])) {
    $comment_id = intval($_POST['comment_id']);
    $sql = "UPDATE comment SET luotlike = luotlike + 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $comment_id);
        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Cập nhật lượt thích thành công"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Không thể cập nhật lượt thích"]);
        }
        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Lỗi truy vấn"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Thiếu comment_id"]);
}

$conn->close();
?>