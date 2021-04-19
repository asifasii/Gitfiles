<template>
  <div class="w-70 p-5" v-if="datas">
    <h1>Table</h1>
    <div >
      <input class="form-control frm" type="text" v-model="search" placeholder="Search name.."/>
    </div>
    
    <table class="table table-striped ">
      
      <tr>
        <th class="name-row" @click="sortData('name')">
         {{tableHeaders[0].label}} <i v-if="sortList=='name' || sortList[0]=='name'" class=" fa fa-sort float-right" aria-hidden="true"></i>
        </th>
        <th @click="sortData('email')">
            {{tableHeaders[1].label}} <i v-if="sortList=='email'|| sortList[1]=='email'" class="fa fa-sort float-right" aria-hidden="true"></i>
           </th>
        <th @click="sortData('company')">
           {{tableHeaders[2].label }} <i v-if="sortList=='company'|| sortList[2]=='company'" class="fa fa-sort float-right" aria-hidden="true"></i>
           </th>
        <th  @click="sortData('city')">
           {{tableHeaders[3].label }} <i v-if="sortList=='city'|| sortList[3]=='city'" class="fa fa-sort float-right" aria-hidden="true"></i>
           </th>
        <th  @click="sortData('website')">
           {{tableHeaders[4].label }} <i v-if="sortList=='website'|| sortList[4]=='website'" class="fa fa-sort float-right" aria-hidden="true"></i>
           </th>
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

<div class="pagination" v-if="pagination==true">
  <a v-if="paginated.length != 0" @click="prev()">&laquo;</a>
  <a href="" class="active">Page{{ current }}</a>
  <a @click="next()" v-if="paginated.length != 0" >&raquo;</a>
</div>
  </div>
</template>
<script>
export default {
  name: "configTable",
  props:{
        apiUrl: String,
        sortList: Array,
        tableHeaders: Object,
        pagination: Boolean,
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
    sortData(dataFromBtn) {
      if(this.order==''){
         this.order='ASC';
      }
       let prop='';
      for (let index = 0; index < this.sortList.length; index++) {
       
        if(this.sortList[index]=='name' && dataFromBtn=='name'){
          prop='name';
          console.log(prop);
        }
        else if(this.sortList[index]=='email' && dataFromBtn=='email'){
          prop='email';
        }
        else if(this.sortList[index]=='company' && dataFromBtn=='company'){
          console.log(this.datas[0]['company']['name']);
          prop='company[name]';
        }
        else if(this.sortList[index]=='city' && dataFromBtn=='city'){
          prop='city';
        }
        else if(this.sortList[index]=='website' && dataFromBtn=='website'){
          prop='website';
        }
        else{
          prop ='';
        }
      }
        console.log(this.order)
        if (prop!='') {
          if(this.order =='ASC'){
          this.datas.sort((a, b) => (a[prop] < b[prop] ? -1 : 1));
          this.order = 'DESC';
        }
        else{
         this.datas.sort((a, b) => (a[prop] < b[prop] ? 1 : -1));
         this.order = 'ASC';
        }
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
      if(this.pagination == true){
        return this.filteredList.slice(this.indexStart, this.indexEnd);
      }
      else{
        return this.filteredList;
      }
      
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
