// 問1:isEven関数を実行して、以下の配列から偶数だけが出力されるように実装してください。


let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓

function isEven() {
    for (let i = 0; i <= numbers.length; i++) {
      let num = numbers[i];
      if (num % 2 == 0) {
        console.log(`${num}は偶数です`);
      }
    }
}

isEven();