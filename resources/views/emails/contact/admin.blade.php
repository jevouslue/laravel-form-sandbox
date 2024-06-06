{{ $contactInfo['last_name'] }} {{ $contactInfo['first_name'] }}様より下記の内容でお問い合わせがありました
内容を確認しご対応をお願いします。

【お問い合わせ内容】
お名前: {{ $contactInfo['last_name'] }} {{ $contactInfo['first_name'] }}
メールアドレス: {{ $contactInfo['email'] }}
電話番号: {{ $contactInfo['tel'] }}
お問い合わせ内容:
{{ $contactInfo['body'] }}

※このメールは配信専用のアドレスで配信されています。
このメールに返信されても返信内容の確認およびご返答ができませんので、ご了承ください。
