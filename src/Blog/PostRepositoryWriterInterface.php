<?php

namespace Liuggio\Blog;

interface PostRepositoryWriterInterface {
    public function save(Post $post);
}