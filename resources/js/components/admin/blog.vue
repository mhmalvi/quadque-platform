<template>
  <div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 mt-4">
        <div class="alert alert-success" v-if="this.success">
          {{ this.success }}
        </div>
        <div class="card">
          <div class="card-header bg-success">
            <h4 class="card-title text-white text-center">Create Blog</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="title">Blog Title</label>
                <textarea
                  v-model="title"
                  class="form-control"
                  rows="4"
                ></textarea>
                <div class="text-danger" v-if="this.titleError">
                  {{ this.titleError }}
                </div>
              </div>
              <div class="form-group">
                <label for="thumbnail">Blog Thumbnail</label>
                <input
                  type="file"
                  class="form-control"
                  id="thumbnail"
                  @change="uploadfile"
                />
                <div class="text-danger" v-if="this.thumbnailError">
                  {{ this.thumbnailError }}
                </div>
                <p class="my-2 text-center" v-if="this.temp_thumbnail_url">
                  <img
                    :src="this.temp_thumbnail_url"
                    width="150"
                    height="150"
                  />
                </p>
              </div>
              <div class="form-group">
                <label for="text">Blog Text</label>
                <textarea
                  v-model="text"
                  id="summernote"
                  class="form-control"
                  rows="10"
                ></textarea>
                <div class="text-danger" v-if="this.textError">
                  {{ this.textError }}
                </div>
              </div>
              <div>
                <button
                  type="button"
                  class="btn btn-block btn-info text-white"
                  @click="save"
                >
                  {{ this.is_edititng ? "Update" : "Save" }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
      <div class="col-md-12">
        <h4>Blog Lists</h4>
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <td>No.</td>
              <th>Title</th>
              <th>Thumbnail</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody v-if="lists.length > 0">
            <tr v-for="list in lists" :key="list.id">
              <td style="vertical-align: middle; font-weight: 500">
                {{ list.id }}.
              </td>
              <td style="width: 70%; vertical-align: middle; font-weight: 500">
                {{ list.title }}
              </td>

              <td>
                <img
                  :src="`http://127.0.0.1:8000/assets/img/blogs/${list.thumbnail}`"
                  width="100"
                  height="100"
                />
              </td>

              <td style="vertical-align: middle">
                <button
                  type="button"
                  class="btn btn-warning"
                  @click="editList(list.id)"
                >
                  Edit</button
                ><button
                  type="button"
                  class="btn btn-danger ml-1"
                  @click="destroyList(list.id)"
                >
                  Delete
                </button>
              </td>
            </tr>
          </tbody>
          <tbody v-else>
            <tr>
              <td colspan="3">
                <h3 class="text-center">There have no blogs...!</h3>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      lists: [],
      title: "",
      thumbnail: "",
      text: "",
      titleError: "",
      textError: "",
      thumbnailError: "",
      success: "",
      temporary_id: "",
      is_edititng: false,
      temp_thumbnail_url: "",
      blog_no: 1,
    };
  },
  methods: {
    fetchAll() {
      axios
        .get("/admin/blog/get")
        .then((response) => {
          this.lists = response.data;
        })
        .catch((error) => {});
    },
    uploadfile(e) {
      this.thumbnail = e.target.files[0];
    },

    save() {
      let url;
      if (this.is_edititng) {
        url = `/admin/blog/update/`;
      } else {
        url = `/admin/blog/store`;
      }

      this.text = $("#summernote").summernote("code");
      let fd = new FormData();
      fd.append("title", this.title);
      fd.append("text", this.text);
      fd.append("thumbnail", this.thumbnail);
      fd.append("id", this.temporary_id);
      axios
        .post(url, fd)
        .then((response) => {
          this.success = response.data.success;
          this.title = "";
          this.text = "";
          $("#summernote").summernote("code", this.text);
          document.getElementById("thumbnail").value = "";
          this.temporary_id = "";
          this.temp_thumbnail_url = "";
          this.is_edititng = false;
          this.fetchAll();
          setTimeout(function () {
            this.success = "";
          }, 5000);
        })
        .catch((error) => {
          if (error.response.data.errors.title) {
            this.titleError = error.response.data.errors.title[0];
          } else {
            this.titleError = "";
          }

          if (error.response.data.errors.text) {
            this.textError = error.response.data.errors.text[0];
          } else {
            this.textError = "";
          }
          if (error.response.data.errors.thumbnail) {
            this.thumbnailError = error.response.data.errors.thumbnail[0];
          } else {
            this.thumbnailError = "";
          }
        });
    },

    editList(list_id) {
      this.is_edititng = true;
      this.temporary_id = list_id;

      axios
        .get(`/admin/blog/edit/${this.temporary_id}`)
        .then((response) => {
          this.title = response.data.title;
          this.text = response.data.text;
          $("#summernote").summernote("code", this.text);
          this.temp_thumbnail_url = `http://127.0.0.1:8000/assets/img/blogs/${response.data.thumbnail}`;
        })
        .catch((error) => {});
    },
    destroyList(list_id) {
      axios.get(`/admin/blog/delete/${list_id}`).then((response) => {
        this.success = response.data.success;
        this.fetchAll();
      });
    },
  },
  mounted() {
    this.fetchAll();
  },
};
</script>
<style scoped>
</style>
