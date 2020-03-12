
<template>
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="row">
          <div class="text-center"></div>

          <div class="col-xs-6 col-lg-6 col-md-6 text-right">
            <h2 class="text-center">Assign Roomssssssssss</h2>

            <form>
              <div class="form-group">
                <label class="text-center text-black">Amount</label>
                <input
                  type="email"
                  class="form-control"
                  v-model="amount"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Amount"
                />
              </div>
            </form>
          </div>
        </div>

        <div class="table-hover">
          <table class="table">
            <thead class="text-default">
              <td class="text-left">
                <p>
                  <strong></strong>
                </p>
                <p>
                  <strong></strong>
                </p>
                <div class="form-control">
                  <select v-model="payment_type">
                    <option selected>Payment Type</option>
                    <option :value="1">First Payment</option>
                    <option :value="2">Second Payment</option>
                  </select>
                  <br />
                  <br />

                  <select v-model="room_type" @change="change">
                    <option selected>Room Type</option>
                    <option :value="1">Single Room</option>
                    <option :value="2">Apartment Room</option>
                  </select>
                </div>
              </td>

              <tr v-if="rooms.length > 2">
                <th>Room Type</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="u in rooms" :key="u.id">
                <td class="text-left">
                  <p>
                    <!-- <strong> Plus other charge </strong> -->
                    {{u.room_type}}
                  </p>
                </td>

                <td class="text-left">
                  <p>{{u.room_name}}</p>
                </td>

                <td class="text-left">
                  <p>{{u.price}}</p>
                </td>

                <td class="text-left" v-if="rooms.length > 2">
                  <p>
                    <button class="btn btn-primary" @click="select(u.id)">Select</button>
                  </p>
                </td>
              </tr>
              <!-- {{this.rooms}} -->
            </tbody>

            <thead>
              <tr v-if="selected_room.length > 0">
                <th>Room Type</th>
                <th>Description</th>
                <th class="text-center">Price</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="text-left">
                  <h2>
                    <!-- <strong> Plus other charge </strong> -->
                    {{selected_room.room_type}}
                  </h2>
                </td>

                <td class="text-left">
                  <h2>{{selected_room.room_name}}</h2>
                </td>

                <td class="text-left">
                  <h2>{{selected_room.price}}</h2>
                  <!-- <div class="row">
                              <div class="form-control">
                              <h4>Room Type: {{selected_room.room_type}} </h4> 
                              <h4>Room Name: {{selected_room.room_name}} </h4>
                              <h4>Room Price: {{selected_room.price}} </h4>
                              
                              </div>

                  </div>-->
                </td>
                <td></td>
                <td class="text-left" v-if="selected_room.length > 0">
                  <p>
                    <button class="btn btn-primary" @click="select(u.id)">Select</button>
                  </p>
                </td>
              </tr>
              <!-- {{this.rooms}} -->
            </tbody>
          </table>
        </div>

        <button class="btn btn-primary btn-sm" @click="save">Save</button>
      </div>
    </div>
  </div>
</template>
import axios from 'axios'
<script>
export default {
  mounted() {
    console.log("Component mounted.", this.tenant);
  },
  props: ["tenant"],
  data() {
    return {
      rooms: [
        {
          id: "",
          room_type: "",
          room_name: "",
          price: "",
          status: "",
          capacity: ""
        }
      ],
      room_type: "",
      selected_room: {},
      payment_type: "",
      amount: ""
    };
  },
  methods: {
    change: function() {
      // alert(this.room_type);
      axios("http://127.0.0.1:8000/api/room/" + this.room_type).then(r => {
        this.rooms = r.data.room;
      });
    },

    save: function() {
      axios
        .post("http://127.0.0.1:8000/api/room-save/", {
          tenant_id: this.tenant.id,
          room_id: this.selected_room.id,
          payment_type: this.payment_type,
          price: this.selected_room.price,
          amount: this.amount
        })
        .then(r => {
          this.rooms = r.data.room;
        });
    },
    select: function($id) {
      // alert($id);
      axios("http://127.0.0.1:8000/api/room-id/" + $id).then(r => {
        this.selected_room = r.data.room;
        // this.rooms = r.data.room

        this.rooms = [
          {
            id: "",
            room_type: "",
            room_name: "",
            price: "",
            status: "",
            capacity: ""
          }
        ];
      });
    }
  }
};
</script>
