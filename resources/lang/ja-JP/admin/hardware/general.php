<?php

return [
    'about_assets_title'           => '資産について',
    'about_assets_text'            => '資産はシリアル番号や資産タグで追跡します。資産は特定することが重要な、高価な物であることが多いです。',
    'archived'  				=> 'アーカイブ',
    'asset'  					=> '資産',
    'bulk_checkout'             => '一括チェックアウト',
    'bulk_checkin'              => '資産をチェックイン',
    'checkin'  					=> '資産をチェックイン',
    'checkout'  				=> '資産をチェックアウト',
    'clone'  					=> '資産を複製',
    'deployable'  				=> '配備可能',
    'deleted'  					=> 'この資産は削除されました。',
    'delete_confirm'            => 'この資産を削除してもよろしいですか？',
    'edit'  					=> '資産を編集',
    'model_deleted'  			=> 'この資産モデルは削除されました。資産を復元する前に、モデルを復元する必要があります。',
<<<<<<< HEAD
    'model_invalid'             => 'この資産のモデルは無効です。',
    'model_invalid_fix'         => 'チェックインまたはチェックアウトを試みる前に、資産を編集して修正する必要があります。',
=======
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'requestable'               => '要求可能',
    'requested'				    => '要求済',
    'not_requestable'           => '要求可能ではありません',
    'requestable_status_warning' => '要求可能な状態を変更しない',
    'restore'  					=> '資産を復元',
    'pending'  					=> 'ペンディング',
    'undeployable'  			=> '配備不可',
    'undeployable_tooltip'  	=> 'この資産にはデプロイできないステータスラベルがあります。現時点ではチェックアウトできません。',
    'view'  					=> '資産を表示',
    'csv_error' => 'CSVファイルにエラーがあります:',
<<<<<<< HEAD
    'import_text' => '
<p>
    資産履歴を含むCSVをアップロードしてください。 資産とユーザーは必ずシステムに存在しなければなりません。 履歴インポートのための資産の照合は、資産タグに対して行われます。入力されたユーザー名と、以下で選択された条件に基づいて、一致するユーザーを見つけようとします。 以下の条件を選択しない場合は、管理者設定で設定したユーザー名のフォーマットで一致しようとします。
    </p>

    <p>CSVに含まれるフィールドは、ヘッダーと一致する必要があります: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. その他の項目は無視されます。 </p>

    <p>チェックイン日: 空白または将来のチェックイン日は、関連するユーザーのアイテムをチェックアウトします。  チェックイン日の列を除外すると、今日の日付でチェックイン日が作成されます。</p>
    ',
    'csv_import_match_f-l' => '名前.苗字 (jane.smith) 形式でユーザーを一致させてみてください',
    'csv_import_match_initial_last' => '名前のイニシャルと苗字 (jsmith) 形式でユーザーを一致させてみてください',
    'csv_import_match_first' => '名前（jane）形式でユーザーを一致させてみてください',
    'csv_import_match_email' => 'ユーザー名をメールで一致させてみてください',
    'csv_import_match_username' => 'ユーザー名を一致させてみてください',
=======
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => '<strong>firstname.lastname</strong> (<code>jane.smith</code>) 形式でユーザーと一致してみてください',
    'csv_import_match_initial_last' => '<strong>最初の姓</strong> (<code>jsmith</code>) フォーマットでユーザーを一致させてみてください',
    'csv_import_match_first' => '<strong>ファーストネーム</strong> (<code>jane</code>) フォーマットでユーザーをマッチさせてみてください',
    'csv_import_match_email' => 'ユーザー名を <strong>メール</strong> で一致させてみてください',
    'csv_import_match_username' => '<strong>ユーザー名</strong> でユーザーを一致させてみてください',
>>>>>>> 49918d330202a1e91ba8e33e3a7d3d06655c3a65
    'error_messages' => 'エラーメッセージ:',
    'success_messages' => '成功メッセージ:',
    'alert_details' => '詳細は以下を確認してください。',
    'custom_export' => 'カスタムエクスポート',
    'mfg_warranty_lookup' => ':manufacturer 保証書の発行状況を検索',
    'user_department' => 'ユーザー部門',
];
