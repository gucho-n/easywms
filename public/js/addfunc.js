function shipincconfirm(){

   // shipin

	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('入庫を確定します。よろしいでしょうか？')){

		location.href = "{{ route('store') }}"; // example_confirm.html へジャンプ

	}
	// 「OK」時の処理終了

	// 「キャンセル」時の処理開始
	else{

		window.alert('キャンセルされました'); // 警告ダイアログを表示

	}
	// 「キャンセル」時の処理終了

   
}


function shipoutconfirm(){


// shipout
   	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
      if(window.confirm('引当を確定します。よろしいでしょうか？')){

         location.href = "{{ route('store') }}"; // example_confirm.html へジャンプ
   
      }
      // 「OK」時の処理終了
   
      // 「キャンセル」時の処理開始
      else{
   
         window.alert('キャンセルされました'); // 警告ダイアログを表示
   
      }
      // 「キャンセル」時の処理終了

   }
   