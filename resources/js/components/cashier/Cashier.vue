<template>
  <div class="box">
    <div class="box-header with-border">
      <div class="input-group">
        <select name="customer_id" class="form-control select2">
          <option v-for="(name, id) in options.customer" :value="id" :key="id">{{ name }}</option>
        </select>
        <div class="input-group-addon">
          <i class="fa fa-plus text-blue"></i>
        </div>
      </div>

      <div class="mt-10">
        <select name="product_id" class="form-control select2">
          <option v-for="(name, id) in options.product" :value="id" :key="id">{{ name }}</option>
        </select>
      </div>
    </div>
    <div class="box-body table-responsive">

      <div class="" style="height: 400px;">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Price</th>
              <th>Unit</th>
              <th>Qty</th>
              <th>Subtotal</th>
              <th>
                <i class="fa fa-trash"></i>
              </th>
            </tr>
            <tr v-for="(item, index) in items" :key="index">
              <td>{{ index + 1}}</td>
              <td>{{ item.name }}</td>
              <td>{{ item.price }}</td>
              <td>{{ item.unit_code }}</td>
              <td>{{ item.quantity }}</td>
              <td>{{ item.total_price }}</td>
              <td>
                <i class="fa fa-trash text-red" style="cursor: pointer;" v-on:click="removeItem(item)"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="">
        <ul class="nav nav-stacked">
          <li>
            Sub Total
            <span class="pull-right">
              {{ sub_total }}
            </span>
          </li>

          <li>
            Discount
            <span class="pull-right">
              {{ discount }}
            </span>
          </li>

          <li>
            Tax
            <span class="pull-right">
              {{ tax }}
            </span>
          </li>

          <li>
            Total
            <span class="pull-right">
              {{ total }}
            </span>
          </li>
        </ul>
      </div>

    </div>
    <div class="box-footer">
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <button class="btn btn-primary btn-block">PAY</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      items: [],
      options: {
        customer: [],
        product: []
      },
      sub_total: 0,
      tax: 0,
      discount: 0,
      total: 0
    }
  },

  mounted(){
    this.prepare()
  },

  methods: {
    prepare(){
      this.getCustomer()
      this.getProduct()
    },

    getCustomer(){
      axios({
        method: 'get',
        url: route('api.customer.options')
      }).then((response) => {
        this.options.customer = response.data.data
      });
    },

    getProduct(){
      axios({
        method: 'get',
        url: route('api.product.options')
      }).then((response) => {
        this.options.product = response.data.data
      })
    },

    addItem(){

    },

    removeItem(item){
      this.items.splice(item, 1)
    }
  }
}
</script>

