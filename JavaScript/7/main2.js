// 問2:以下の要件を満たすように実装してください。
// 【要件】
// ・インスタンス化した時にガソリンとナンバーがセットされるようなCarクラスを作成する
// ・「ガソリンは〇〇です。ナンバーは△△です」と出力される「getNumGas」という関数を作成する


class Car {
  constructor(gas, num) {
    this.gas = gas;
    this.num = num;
  }

  getNumGas() {
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です。`);
  }
}

let myCar = new Car(20.05, 2345);
myCar.getNumGas();