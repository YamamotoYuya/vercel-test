<p>こちらのページは認証済みユーザーのみご覧いただけます。</p>
<p>登録時にお送りしたメールでユーザー認証を完了してください。</p>

<p>メールが届いていない方、または紛失してしまった方は、下記のボタンを押してください</p>
<p>認証メールを再送いたします。de</p>
<form action="{{ route('verification.send') }}" method="post">
    @csrf
    <button>メールを再送する</button>
</form>
