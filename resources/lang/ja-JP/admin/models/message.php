<?php

return array(

    'deleted' => '資産モデルを削除しました',
    'does_not_exist' => '型番が存在しません。',
    'no_association' => '警告！このアイテムのアセットモデルが無効または不足しています！',
    'no_association_fix' => 'モデルを割り当てるために今すぐこの資産を編集してください。',
    'assoc_users'	 => 'この減価償却は複数のモデルに関係付けられているため削除することができません。モデルを削除してから再度実行してください。 ',
    'invalid_category_type' => 'このカテゴリは資産カテゴリにする必要があります。',

    'create' => array(
        'error'   => '型番が作成できませんでした。もう一度やり直して下さい。',
        'success' => '型番が作成されました。',
        'duplicate_set' => '資産名やメーカー、型番は既に存在しています。',
    ),

    'update' => array(
        'error'   => '型番が更新できませんでした。もう一度やり直して下さい。',
        'success' => '型番が更新されました。',
    ),

    'delete' => array(
        'confirm'   => '本当にこの資産モデルを削除しますか？',
        'error'   => '型番を削除する際に問題が発生しました。もう一度やり直して下さい。',
        'success' => '型番は削除されました。'
    ),

    'restore' => array(
        'error'   		=> '型番が復元されませんでした。もう一度、やり直して下さい。',
        'success' 		=> '型番は復元されました。'
    ),

    'bulkedit' => array(
        'error'   		=> 'フィールドが選択されていないため、更新されませんでした。',
        'success' 		=> 'モデルが正常に更新されました。|:model_count モデルが正常に更新されました。',
<<<<<<< HEAD
        'warn'          => '次のモデルのプロパティを更新しようとしています: |次のモデルのプロパティを編集しようとしています :model_count モデル:',
=======
        'warn'          => '次のモデルのプロパティを更新しようとしています:|次のモデルのプロパティを編集しようとしています:model_count モデル:',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65

    ),

    'bulkdelete' => array(
        'error'   		    => 'モデルが選択されていないため、何も削除されませんでした。',
        'success' 		    => ':success_count モデルを削除しました!',
        'success_partial' 	=> ':success_count モデルが削除されましたが、:fail_count 個はアセットが関連付けられているため、削除できませんでした。'
    ),

);
