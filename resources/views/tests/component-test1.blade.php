<x-tests.app>
  <x-slot name="header">ヘッダー</x-slot>
  コンポーネントテスト１
  <x-tests.card title="タイトル" content="本文" :message="$message"></x-tests.card>
  <x-tests.card title="タイトル２"></x-tests.card>
  <x-tests.card title="背景色変更" class="bg-red-400"></x-tests.card>
</x-tests.app>