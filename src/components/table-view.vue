<template>
  <div class="w-70 p-5" v-if="datas">


    <h1>API Table View</h1>
    <div >
      <input class="form-control frm" type="text" v-model="search" placeholder="Search name.."/>
    </div>

    
    <table class="table table-striped">
      <tr>
        <th class="name-row" @click="sortData">
          Name  
          <i class="fa fa-sort float-right" aria-hidden="true"></i>

        </th>
        <th>E-mail</th>
        <th>Company Name</th>
        <th>City</th>
        <th>Website</th>
      </tr>
      <tr v-for="(data, index) in paginated" :key="index">
        <td>{{ data.name }}</td>
        <td>
          <a href="">{{ data.email }}</a>
        </td>
        <td>{{ data.company.name }}</td>
        <td>{{ data.address.city }}</td>
        <td>{{ data.website }}</td>
      </tr>
    </table>

<div class="pagination" v-if="paginated">
  <a v-if="paginated.length != 0" @click="prev()">&laquo;</a>
  <a href="" class="active">Page{{ current }}</a>
  <a @click="next()" v-if="paginated.length != 0" >&raquo;</a>
</div>


      
  <!-- <b-pagination v-model="CurrentPage" :per-page="perPage"> -->
      <!-- </b-pagination> -->
  </div>
</template>
<script>
export default {
  name: "tableview",
  props:{
        apiUrl: String,
        sortList: Object
  },
  data() {
    return {
      datas: [],
      search: "",
      tempArray: [],
      order: '',
      current:1,
      pageSize:5,
    };
  },
  
  beforeMount() {
    // debugger;
    this.getName();
  },

  

  methods: {
    async getName() {
      try {
        const res = await fetch(this.apiUrl);
        const datas = await res.json();
        this.datas = datas;
      } catch (error) {
        error
      }
      
    },
    sortData() {
      if(this.order==''){
         this.order='ASC';
      }
     
      let prop = this.sortList;
      if(this.order =='ASC'){
        this.datas.sort((a, b) => (a[prop] < b[prop] ? -1 : 1));
        this.order = 'DSC';
      }
      else{
        this.datas.sort((a, b) => (a[prop] < b[prop] ? 1 : -1));
        this.order = 'ASC';
      }

    },
    prev() {
      this.current--;
    },
    next() {
      this.current++;
    }
  },
  computed: {
    filteredList: function() {
      return this.datas.filter(datas => {
        return datas.name.match(this.search);
      });
    },
     indexStart() {
      return (this.current - 1) * this.pageSize;
    },
    indexEnd() {
      return this.indexStart + this.pageSize;
    },
    paginated() {
      return this.datas.slice(this.indexStart, this.indexEnd);
    },
  },
  
};
</script>
<style>
.table {
  text-align: left;
}
tr:hover {
  color: gray; 
}
td {
  padding: 6px;
}
th {
  font-size: 19px;
  padding-top: 12px;
  padding-bottom: 12px;
  padding-left: 6px;
}
.frm {
  width: 100%;
  size: 50px;
  margin-top: 50px;
  margin-bottom: 25px;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  cursor: pointer;
  }
</style>
