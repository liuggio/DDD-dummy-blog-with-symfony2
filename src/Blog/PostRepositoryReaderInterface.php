<?php

namespace Liuggio\Blog;

interface PostRepositoryReaderInterface {
    public function getPostsByAuthorNickname($nickname);
}